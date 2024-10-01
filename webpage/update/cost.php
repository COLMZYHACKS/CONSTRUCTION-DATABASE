<?php 
require_once("../../connect/conn.php");

// Retrieve the ID from the query string
$id = $_GET["GetID"];

// Validate the ID
if (empty($id)) {
    die("Invalid ID.");
}

// SQL query to fetch data based on the provided ID
$mysql = "SELECT * FROM cost WHERE CostID = '$id'";
$result = mysqli_query($conn, $mysql);
if ($row = mysqli_fetch_array($result)) { 
    $id = $row['CostID'];
    $ProjectID = $row['ProjectID'];
    $ExpenseType = $row['ExpenseType'];
    $Amount = $row['Amount'];
    $Date = $row['Date'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/form.css">
    <title>Update Cost</title>
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
            <li class="active"><a href="../costs.php">Costs & Budget</a></li>
            <li><a href="../safety.php">Safety & Compliance</a></li>
            <li><a href="../report.php">Reports</a></li>
    </nav><br>

    <h2 style="text-align: center;">Update Cost</h2>

    <form action="../../index.php?GetID=<?php echo $id; ?>" method="POST">
        <label for="project_id">Project ID:</label><br>
        <input type="number" id="project_id" name="project_id" value="<?php echo $ProjectID ?>" required><br><br>

        <label for="ExpenseType">Expense Type:</label><br>
        <input type="text" id="ExpenseType" name="ExpenseType" value="<?php echo $ExpenseType ?>" required><br><br>

        <label for="amount">Amount:</label><br>
        <input type="number" step="0.01" id="amount" name="amount" value="<?php echo  $Amount ?>" required><br><br>

        <label for="date">Date:</label><br>
        <input type="date" id="date" name="date" value="<?php echo $Date ?>" required><br><br>
        <input type="hidden" name="table" value="cost">

        <button type="submit" name="update">Update Cost</button>
    </form>
</body>
</html>
