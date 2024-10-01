<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/form.css">
    <title>Resource</title>
</head>
<body>
    <nav>      
    <a href="../index.php"><img src="../../images/UMAT LOGO.png" height="40px" width="40px"></a>
            <li><a href="Dashboard.php">Dashboard</a></li>
            <li><a href="../projects.php">Projects</a></li>
            <li><a href="tasks.php">Tasks</a></li>
            <li class="active"><a href="resources.php">Resources</a></li>
            <li><a href="employees.php">Employees</a></li>
            <li><a href="equipment.php">Equipment</a></li>
            <li><a href="costs.php">Costs & Budget</a></li>
            <li><a href="safety.php">Safety & Compliance</a></li>
            <li><a href="report.php">Reports</a></li>
             
    </nav><br>
    <a href="../resources.php"><button>Back</button></a>
    <h2 style="text-align: center;">Add New Resource</h2>
    <form action="handler/add_resource.php" method="POST">
        <label for="type">Resource Type:</label><br>
        <input type="text" id="type" name="type" required><br><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description" required></textarea><br><br>

        <label for="project_id">Project ID:</label><br>
        <input type="number" id="project_id" name="project_id" required><br><br>

        <label for="quantity">Quantity:</label><br>
        <input type="number" id="quantity" name="quantity" required><br><br>

        <label for="cost">Cost:</label><br>
        <input type="number" step="0.01" id="cost" name="cost" required><br><br>

        <button type="submit" name="submit">Add resource</button>
    </form>
</body>
</html>
