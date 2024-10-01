-- Drop and recreate database
DROP DATABASE IF EXISTS construction;
CREATE DATABASE construction;
USE construction;

-- Create tables
CREATE TABLE Employee (
    EmployeeID INT PRIMARY KEY AUTO_INCREMENT,
    Name VARCHAR(255),
    Phone VARCHAR(15) UNIQUE,
    Email VARCHAR(255) UNIQUE,
    JobRole VARCHAR(100),
    Certifications ENUM('None', 'Certified Construction Manager', 'LEED Accredited Professional', 
                        'Project Management Professional', 'Certified Safety Professional', 
                        'OSHA Certification', 'Certified in Risk and Information Systems Control', 
                        'Certified Information Systems Auditor', 'Certified Information Systems Security Professional')
);

CREATE TABLE Project (
    ProjectID INT PRIMARY KEY AUTO_INCREMENT,
    Name VARCHAR(255),
    Location VARCHAR(255),
    StartDate DATE,
    EndDate DATE,
    ClientInfo TEXT,
    ProjectManagerID INT,
    Status ENUM('Completed', 'Cancelled', 'Pending', 'In Progress'),
    FOREIGN KEY (ProjectManagerID) REFERENCES Employee(EmployeeID) ON DELETE SET NULL ON UPDATE CASCADE
);

CREATE TABLE Task (
    TaskID INT PRIMARY KEY AUTO_INCREMENT,
    ProjectID INT,
    Description TEXT,
    DueDate DATETIME,
    CompletionStatus ENUM('Not Started', 'In Progress', 'Completed', 'On Hold'),
    AssignedTo INT,
    FOREIGN KEY (ProjectID) REFERENCES Project(ProjectID) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (AssignedTo) REFERENCES Employee(EmployeeID) ON DELETE SET NULL ON UPDATE CASCADE
);

CREATE TABLE Resource (
    ResourceID INT PRIMARY KEY AUTO_INCREMENT,
    Type VARCHAR(100),
    Description TEXT,
    ProjectID INT,
    Quantity INT,
    Cost DECIMAL(10, 2),
    FOREIGN KEY (ProjectID) REFERENCES Project(ProjectID) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE Equipment (
    EquipmentID INT PRIMARY KEY AUTO_INCREMENT,
    ProjectID	INT,
    Description VARCHAR(100) UNIQUE,
    AvailabilityStatus ENUM('Pending', 'Available', 'Not Available'),
    MaintenanceSchedule DATE,
    InventoryLevel ENUM('High', 'Moderate', 'Low'),
    FOREIGN KEY (ProjectID) REFERENCES Project(ProjectID) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE Cost (
    CostID INT PRIMARY KEY AUTO_INCREMENT,
    ProjectID INT,
    ExpenseType VARCHAR(100),
    Amount DECIMAL(10, 2),
    Date DATE,
    FOREIGN KEY (ProjectID) REFERENCES Project(ProjectID) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE SafetyIncident (
    IncidentID INT PRIMARY KEY AUTO_INCREMENT,
    ProjectID INT,
    Description TEXT,
    Date DATE,
    ComplianceStatus VARCHAR(100),
    FOREIGN KEY (ProjectID) REFERENCES Project(ProjectID) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE Employee_Project (
    EmployeeID INT,
    ProjectID INT,
    PRIMARY KEY (EmployeeID, ProjectID),
    FOREIGN KEY (EmployeeID) REFERENCES Employee(EmployeeID) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (ProjectID) REFERENCES Project(ProjectID) ON DELETE CASCADE ON UPDATE CASCADE
);

-- Create views
CREATE VIEW employee_assign AS
SELECT e.EmployeeID, e.Name, p.ProjectID, p.Name AS ProjectName, p.Status AS ProjectStatus
FROM Employee_Project ep
JOIN Employee e ON ep.EmployeeID = e.EmployeeID
JOIN Project p ON ep.ProjectID = p.ProjectID;

CREATE VIEW project_info AS
SELECT * FROM Project;

CREATE VIEW task_progress AS
SELECT t.TaskID, t.ProjectID, t.Description, t.DueDate, t.CompletionStatus, e.Name AS AssignedTo
FROM Task t
JOIN Employee e ON t.AssignedTo = e.EmployeeID
JOIN Project p ON t.ProjectID = p.ProjectID;

CREATE VIEW resource_allocation AS
SELECT * FROM Resource;

CREATE VIEW employee_details AS
SELECT * FROM Employee;

CREATE VIEW project_equipment AS
SELECT * FROM Equipment;

CREATE VIEW cost_summary AS
SELECT * FROM Cost;

CREATE VIEW safety_incidents AS
SELECT * FROM SafetyIncident;

CREATE VIEW report As
SELECT 
    p.ProjectID,
    p.Name AS ProjectName,
    p.Location,
    p.StartDate,
    p.EndDate,
    p.Status AS ProjectStatus,
    e.Name AS ProjectManager,
    t.TaskID,
    t.Description AS TaskDescription,
    t.DueDate AS TaskDueDate,
    t.CompletionStatus AS TaskStatus,
    r.ResourceID,
    r.Type AS ResourceType,
    r.Quantity AS ResourceQuantity,
    r.Cost AS ResourceCost,
    emp.Name AS ResourceAssignedTo,
    c.ExpenseType AS CostType,
    c.Amount AS CostAmount,
    s.Description AS SafetyIncidentDescription,
    s.Date AS SafetyIncidentDate,
    s.ComplianceStatus AS SafetyComplianceStatus
FROM Project p
LEFT JOIN Employee e ON p.ProjectManagerID = e.EmployeeID
LEFT JOIN Task t ON p.ProjectID = t.ProjectID
LEFT JOIN Resource r ON p.ProjectID = r.ProjectID
LEFT JOIN Employee emp ON t.AssignedTo = emp.EmployeeID
LEFT JOIN Cost c ON p.ProjectID = c.ProjectID
LEFT JOIN SafetyIncident s ON p.ProjectID = s.ProjectID;