<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/form.css">
    <title>Project</title>
</head>
<body>
    <nav>      
    <a href="../index.php"><img src="../../images/UMAT LOGO.png" height="40px" width="40px"></a>
            <li><a href="Dashboard.php">Dashboard</a></li>
            <li class="active"><a href="projects.php">Projects</a></li>
            <li><a href="tasks.php">Tasks</a></li>
            <li><a href="resources.php">Resources</a></li>
            <li><a href="employees.php">Employees</a></li>
            <li><a href="equipment.php">Equipment</a></li>
            <li><a href="costs.php">Costs & Budget</a></li>
            <li><a href="safety.php">Safety & Compliance</a></li>
            <li><a href="report.php">Reports</a></li>
             
    </nav><br>
    <a href="../projects.php"><button>Back</button></a>
    <h2 style="text-align: center;">Add New Project</h2>
    <form action="handler/add_project.php" method="POST">
        <label for="name">Project Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="location">Location:</label><br>
        <input type="text" id="location" name="location" required><br><br>

        <label for="start_date">Start Date:</label><br>
        <input type="date" id="start_date" name="start_date" required><br><br>

        <label for="end_date">End Date:</label><br>
        <input type="date" id="end_date" name="end_date" required><br><br>

        <label for="client_info">Client Information:</label><br>
        <textarea id="client_info" name="client_info" required></textarea><br><br>

        <label for="project_manager">Project Manager ID:</label><br>
        <input type="number" id="project_manager" name="project_manager" required><br><br>

        <label for="status">Status:</label><br>
        <select id="status" name="status" required>
            <option value="Completed">Completed</option>
            <option value="Cancelled">Cancelled</option>
            <option value="Pending">Pending</option>
            <option value="In Progress">In Progress</option>
        </select><br><br>

        <button name="submit" type="submit">Add Project</button>
    </form>
</body>
</html>
