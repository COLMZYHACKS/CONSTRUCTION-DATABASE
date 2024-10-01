<?php
require_once("../connect/conn.php");
$mysql= ("SELECT * FROM report");
$result= mysqli_query($conn, $mysql);
$result2= mysqli_query($conn, $mysql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/form.css">
    <title>Database Report</title>
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
            <li><a href="safety.php">Safety & Compliance</a></li>
            <li class="active"><a href="report.php">Reports</a></li>
             
    </nav>
    <br>
    <h2 style="text-align: center;">Reports</h2>
    <table>
                            <thead>
                                <tr>
                                    <th>ProjectID</th>
                                    <th>ProjectName</th>
                                    <th>Location</th>
                                    <th>StartDate</th>
                                    <th>EndDate</th>
                                    <th>ProjectStatus</th>
                                    <th>ProjectManager</th>
                                    <th>TaskID</th>
                                    <th>TaskDescription</th>
                                    <th>TaskDueDate</th>
                                    <th>TaskStatus</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($row = mysqli_fetch_array($result)) { 
                                    $id = $row['ProjectID'];
                                    $name = $row['ProjectName'];
                                    $Location = $row['Location'];
                                    $StartDate = $row['StartDate'];
                                    $EndDate = $row['EndDate'];
                                    $ProjectStatus = $row['ProjectStatus'];
                                    $ProjectManager = $row['ProjectManager'];
                                    $TaskID = $row['TaskID'];
                                    $TaskDescription = $row['TaskDescription'];
                                    $TaskDueDate = $row['TaskDueDate'];
                                    $TaskStatus = $row['TaskStatus'];
                                ?>
                                <tr>
                                    <td><?php echo $id; ?></td>
                                    <td><?php echo $name; ?></td>
                                    <td><?php echo $Location; ?></td>
                                    <td><?php echo $StartDate; ?></td>
                                    <td><?php echo $EndDate; ?></td>
                                    <td><?php echo $ProjectStatus ; ?></td>
                                    <td><?php echo $ProjectManager; ?></td>
                                    <td><?php echo $TaskID ; ?></td>
                                    <td><?php echo $TaskDescription; ?></td>
                                    <td><?php echo $TaskDueDate; ?></td>
                                    <td><?php echo $TaskStatus; ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <br>
                        <table>
                            <thead>
                                <tr>
                                    <th>ResourceID</th>
                                    <th>ResourceType</th>
                                    <th>ResourceQuantity</th>
                                    <th>ResourceCost</th>
                                    <th>ResourceAssignedTo</th>
                                    <th>CostType</th>
                                    <th>CostAmount</th>
                                    <th>IncidentDescription</th>
                                    <th>IncidentDate</th>
                                    <th>SafetyStatus</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($row = mysqli_fetch_array($result2)) { 
                                    $id = $row['ProjectID'];
                                    $ResourceID = $row['ResourceID'];
                                    $ResourceType = $row['ResourceType'];
                                    $ResourceQuantity = $row['ResourceQuantity'];
                                    $ResourceCost = $row['ResourceCost'];
                                    $ResourceAssignedTo = $row['ResourceAssignedTo'];
                                    $CostType = $row['CostType'];
                                    $CostAmount = $row['CostAmount'];
                                    $SafetyIncidentDescription = $row['SafetyIncidentDescription'];
                                    $SafetyIncidentDate = $row['SafetyIncidentDate'];
                                    $SafetyComplianceStatus = $row['SafetyComplianceStatus'];
                                ?>
                                <tr>
                                    <td><?php echo $ResourceID; ?></td>
                                    <td><?php echo $ResourceType; ?></td>
                                    <td><?php echo $ResourceQuantity; ?></td>
                                    <td><?php echo $ResourceCost; ?></td>
                                    <td><?php echo $ResourceAssignedTo; ?></td>
                                    <td><?php echo $CostType; ?></td>
                                    <td><?php echo $CostAmount; ?></td>
                                    <td><?php echo $SafetyIncidentDescription; ?></td>
                                    <td><?php echo $SafetyIncidentDate; ?></td>
                                    <td><?php echo $SafetyComplianceStatus; ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
</body>
</html>
</body>
</html>