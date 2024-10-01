<?php
require_once("../connect/conn.php");
$mysql= ("SELECT * FROM Safety_incidents");
$result= mysqli_query($conn, $mysql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/form.css">
    <title>Database Settings</title>
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
            <li><a href="costs.php">Costs & Budget</a></li>
            <li class="active"><a href="safety.php">Safety & Compliance</a></li>
            <li><a href="report.php">Reports</a></li>
             
    </nav>
    <br>
    <a href="forms/safety.php"><button>+ Add Report</button></a>
    <h2 style="text-align: center;">Safety Incident Details</h2>
    <table>
                            <thead>
                                <tr>
                                    <th>IncidentID</th>
                                    <th>ProjectID</th>
                                    <th>Description</th>
                                    <th>Date</th>
                                    <th>ComplianceStatus</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($row = mysqli_fetch_array($result)) { 
                                    $id = $row['IncidentID'];
                                    $Description = $row['Description'];
                                    $ProjectID = $row['ProjectID'];
                                    $Date = $row['Date'];
                                    $ComplianceStatus = $row['ComplianceStatus'];
                                ?>
                                <tr>
                                    <td><?php echo $id; ?></td>
                                    <td><?php echo $ProjectID; ?></td>
                                    <td><?php echo $Description; ?></td>
                                    <td><?php echo $Date; ?></td>
                                    <td><?php echo $ComplianceStatus; ?>
                                    <td><a class="btn btn-info text-white" href="edit.php?GetID=<?php echo $id?>"><img src="../images/Picture7.png" alt="Edit"></a> | <a href="delete.php?Del=<?php echo $id?>"><img src="../images/Picture6.png" alt="Delete"></a></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
</body>
</html>
</body>
</html>