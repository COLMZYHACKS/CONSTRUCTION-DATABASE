USE construction;
-- Insert data into Employee table
INSERT INTO Employee (Name, Phone, Email, JobRole, Certifications)
VALUES
('Kofi Mensah', '0241234567', 'kofi.mensah@example.com', 'Project Manager', 'Certified Construction Manager'),
('Ama Boateng', '0247654321', 'ama.boateng@example.com', 'Site Supervisor', 'Certified Safety Professional'),
('Kwame Nkrumah', '0249876543', 'kwame.nkrumah@example.com', 'Engineer', 'LEED Accredited Professional'),
('Akua Nyarko', '0243216549', 'akua.nyarko@example.com', 'Foreman', 'None'),
('Yaw Asante', '0245554321', 'yaw.asante@example.com', 'Electrician', 'Certified Information Systems Auditor');

-- Insert data into Project table
INSERT INTO Project (Name, Location, StartDate, EndDate, ClientInfo, ProjectManagerID, Status)
VALUES
('Accra Mall Expansion', 'Accra', '2024-01-15', '2024-12-15', 'Accra Retail Ltd.', 1, 'In Progress'),
('Tema Port Renovation', 'Tema', '2023-08-01', '2024-04-30', 'Tema Ports Authority', 1, 'In Progress'),
('Kumasi Stadium Upgrade', 'Kumasi', '2023-05-10', '2024-03-10', 'Ashanti Sports Commission', 3, 'Pending');

-- Insert data into Task table
INSERT INTO Task (ProjectID, Description, DueDate, CompletionStatus, AssignedTo)
VALUES
(1, 'Site preparation and foundation work', '2024-03-01 12:00:00', 'In Progress', 2),
(1, 'Electrical installations', '2024-06-15 12:00:00', 'Not Started', 5),
(2, 'Demolition of old structures', '2023-09-01 10:00:00', 'Completed', 4),
(2, 'Pavement of new container terminal', '2024-02-28 16:00:00', 'In Progress', 2),
(3, 'Installation of new scoreboard', '2024-01-15 14:00:00', 'On Hold', 3);

-- Insert data into Resource table
INSERT INTO Resource (Type, Description, ProjectID, Quantity, Cost)
VALUES
('Cement', 'Dangote Cement', 1, 1000, 20000.00),
('Steel Rods', 'Steel beams for foundation work', 1, 500, 45000.00),
('Bricks', 'Construction bricks for stadium seating', 3, 2000, 10000.00),
('Sand', 'Sand for paving terminal', 2, 1500, 7500.00),
('Electrical Cables', 'Cables for stadium wiring', 3, 100, 5000.00);

-- Insert data into Equipment table
INSERT INTO Equipment (ProjectID, Description, AvailabilityStatus, MaintenanceSchedule, InventoryLevel)
VALUES
(1,'Bulldozer', 'Available', '2024-02-01', 'High'),
(2,'Excavator', 'Not Available', '2024-03-15', 'Moderate'),
(3,'Concrete Mixer', 'Pending', '2024-04-10', 'Low'),
(1,'Scaffolding', 'Available', '2024-01-10', 'High'),
(2,'Forklift', 'Not Available', '2024-03-01', 'Low');

-- Insert data into Cost table
INSERT INTO Cost (ProjectID, ExpenseType, Amount, Date)
VALUES
(1, 'Labor Costs', 50000.00, '2024-02-10'),
(2, 'Material Costs', 60000.00, '2024-01-05'),
(3, 'Equipment Rental', 15000.00, '2024-01-20'),
(1, 'Transportation', 10000.00, '2024-02-12'),
(2, 'Safety Equipment', 8000.00, '2024-01-15');

-- Insert data into SafetyIncident table
INSERT INTO SafetyIncident (ProjectID, Description, Date, ComplianceStatus)
VALUES
(1, 'Worker slipped and fell, minor injury', '2024-01-25', 'Compliant'),
(2, 'Heavy equipment malfunction, no injury', '2024-02-15', 'Compliant'),
(1, 'Electrical short circuit, no injuries', '2024-02-05', 'Non-Compliant'),
(3, 'Scaffolding collapse, minor injuries', '2024-01-18', 'Compliant');

-- Insert data into Employee_Project table
INSERT INTO Employee_Project (EmployeeID, ProjectID)
VALUES
(1, 1), -- Kofi Mensah managing Accra Mall Expansion
(2, 1), -- Ama Boateng working on Accra Mall Expansion
(3, 2), -- Kwame Nkrumah working on Tema Port Renovation
(4, 2), -- Akua Nyarko working on Tema Port Renovation
(3, 3), -- Kwame Nkrumah managing Kumasi Stadium Upgrade
(5, 3); -- Yaw Asante working on Kumasi Stadium Upgrade
