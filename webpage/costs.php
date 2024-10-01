<?php
require_once("../connect/conn.php");
$mysql= ("SELECT * FROM cost_summary");
$result= mysqli_query($conn, $mysql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/form.css">
    <title>Costs</title>
</head>
<body>
    <nav>
            
    <a href="../index.php"><img src="../images/UMAT LOGO.png" height="40px" width="40px"></a>
            <li><a href="Dashboard.php">Dashboard</a></li>
            <li><a href="projects.php">Projects</a></li>
            <li><a href="tasks.php">Tasks</a></li>
            <li><a href="resources.php">Resources</a></li>
            <li><a href="employees.php">Employees</a></li>
            <li><a href="equipment.php">Equipment</a></li>
            <li class="active"><a href="costs.php">Costs & Budget</a></li>
            <li><a href="safety.php">Safety & Compliance</a></li>
            <li><a href="report.php">Reports</a></li>
             
    </nav>
    <br>
    <a href="forms/cost.php"><button>+ Add cost</button></a>
    <table>
    <h2 style="text-align: center;">Cost And Budget Details</h2>
                            <thead>
                                <tr>
                                    <th>CostID</th>
                                    <th>ProjectID</th>
                                    <th>ExpenseType</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($row = mysqli_fetch_array($result)) { 
                                    $id = $row['CostID'];
                                    $ProjectID = $row['ProjectID'];
                                    $ExpenseType = $row['ExpenseType'];
                                    $Amount = $row['Amount'];
                                    $Date = $row['Date'];
                                ?>
                                <tr>
                                    <td><?php echo $id; ?></td>
                                    <td><?php echo $ProjectID; ?></td>
                                    <td><?php echo $ExpenseType; ?></td>
                                    <td><?php echo $Amount; ?></td>
                                    <td><?php echo $Date; ?>
                                    <td><a class="btn btn-info text-white" href="update/cost.php?GetID=<?php echo $id?>"><img src="../images/Picture7.png" alt="Edit"></a> | <a href="delete.php?Del=<?php echo $id?>"><img src="../images/Picture6.png" alt="Delete"></a></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
</body>
</html>
</body>
</html>