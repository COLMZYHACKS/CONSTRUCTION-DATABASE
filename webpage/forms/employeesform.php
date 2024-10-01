<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/form.css">
    <title>Employee</title>
</head>
<body>
    <nav>      
    <a href="../index.php"><img src="../../images/UMAT LOGO.png" height="40px" width="40px"></a>
            <li><a href="../Dashboard.php">Dashboard</a></li>
            <li><a href="../projects.php">Projects</a></li>
            <li><a href="../tasks.php">Tasks</a></li>
            <li><a href="../resources.php">Resources</a></li>
            <li class="active"><a href="../employees.php">Employees</a></li>
            <li><a href="../equipment.php">Equipment</a></li>
            <li><a href="../costs.php">Costs & Budget</a></li>
            <li><a href="../safety.php">Safety & Compliance</a></li>
            <li><a href="../report.php">Reports</a></li>
             
    </nav><br>
    <a href="../employees.php"><button>Back</button></a>
    <h2 style="text-align: center;">Add New Employee</h2>
    <form action="/handler/add_employee.php" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="phone">Phone:</label><br>
        <input type="text" id="phone" name="phone" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="jobrole">Job Role:</label><br>
        <input type="text" id="jobrole" name="jobrole" required><br><br>

        <label for="certifications">Certifications:</label><br>
        <select id="certifications" name="certifications" required>
            <option value="None">None</option>
            <option value="Certified Construction Manager">Certified Construction Manager</option>
            <option value="LEED Accredited Professional">LEED Accredited Professional</option>
            <option value="Project Management Professional">Project Management Professional</option>
            <option value="Certified Safety Professional">Certified Safety Professional</option>
            <option value="OSHA Certification">OSHA Certification</option>
            <option value="Certified in Risk and Information Systems Control">Certified in Risk and Information Systems Control</option>
            <option value="Certified Information Systems Auditor">Certified Information Systems Auditor</option>
            <option value="Certified Information Systems Security Professional">Certified Information Systems Security Professional</option>
        </select><br><br>

        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>
