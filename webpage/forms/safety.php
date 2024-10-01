<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/form.css">
    <title>Safety Incident</title>
</head>
<body>
    <nav>      
    <a href="../index.php"><img src="../../images/UMAT LOGO.png" height="40px" width="40px"></a>
            <li><a href="../Dashboard.php">Dashboard</a></li>
            <li><a href="../projects.php">Projects</a></li>
            <li><a href="../tasks.php">Tasks</a></li>
            <li><a href="../resources.php">Resources</a></li>
            <li><a href="../employees.php">Employees</a></li>
            <li><a href="../equipment.php">Equipment</a></li>
            <li><a href="../costs.php">Costs & Budget</a></li>
            <li class="active"><a href="../safety.php">Safety & Compliance</a></li>
            <li><a href="../report.php">Reports</a></li>
             
    </nav><br>
    <h2 style="text-align: center;">Add New Safety Incident</h2>

    <form action="handler/add_safety.php" method="POST">
        <label for="project_id">Project ID:</label><br>
        <input type="number" id="project_id" name="project_id" required><br><br>

        <label for="date">Date of Incident:</label><br>
        <input type="date" id="date" name="date" required><br><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description" required></textarea><br><br>

        <label for="ComplianceStatus">ComplianceStatus:</label><br>
        <select id="ComplianceStatus" name="ComplianceStatus" required>
            <option value="Compliant">Compliant</option>
            <option value="Non-Compliant">Non-Compliant</option>
        </select><br><br>

        <button type="submit" name="submit">+ Add Safety Incident</button>
    </form>
</body>
</html>
