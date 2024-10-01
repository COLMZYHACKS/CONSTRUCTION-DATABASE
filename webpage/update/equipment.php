<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/form.css">
    <title>Equipment</title>
</head>
<body>
    <nav>      
    <a href="../index.php"><img src="../../images/UMAT LOGO.png" height="40px" width="40px"></a>
            <li><a href="../Dashboard.php">Dashboard</a></li>
            <li><a href="../projects.php">Projects</a></li>
            <li><a href="../tasks.php">Tasks</a></li>
            <li><a href="../resources.php">Resources</a></li>
            <li><a href="../employees.php">Employees</a></li>
            <li class="active"><a href="../equipment.php">Equipment</a></li>
            <li><a href="../costs.php">Costs & Budget</a></li>
            <li><a href="../safety.php">Safety & Compliance</a></li>
            <li><a href="../report.php">Reports</a></li>
             
    </nav><br>
    <a href="../equipment.php"><button>Back</button></a>
    <h2 style="text-align: center;">Add New Equipment</h2>
    <form action="handler/add_equipment.php" method="POST">
        <label for="description">Equipment Description:</label><br>
        <input type="text" id="description" name="description" required><br><br>

        <label for="status">Availability Status:</label><br>
        <select id="status" name="status" required>
            <option value="Pending">Pending</option>
            <option value="Available">Available</option>
            <option value="Not Available">Not Available</option>
        </select><br><br>

        <label for="Maintenance">Maintenance Schedule:</label><br>
        <input type="date" id="Maintenance" name="Maintenance" required><br><br>

        <label for="Inventory">Inventry Level:</label><br>
        <select id="Inventory" name="Inventory" required>
            <option value="High">High</option>
            <option value="Moderate">Moderate</option>
            <option value="Low">Low</option>
        </select><br><br>

        <button type="submit" name="submit">+ Add Equipment</button>
    </form>
</body>
</html>
