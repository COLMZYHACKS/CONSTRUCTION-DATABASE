<?php
require_once("../connect/conn.php");
$mysql= ("SELECT * FROM project_info");
$result= mysqli_query($conn, $mysql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/form.css">
    <title>Projects</title>
</head>
<body>
    <nav>
            
    <a href="../index.php"><img src="../images/UMAT LOGO.png" height="40px" width="40px"></a>
            <li><a href="Dashboard.php">Dashboard</a></li>
            <li class="active"><a href="projects.php">Projects</a></li>
            <li><a href="tasks.php">Tasks</a></li>
            <li><a href="resources.php">Resources</a></li>
            <li><a href="employees.php">Employees</a></li>
            <li><a href="equipment.php">Equipment</a></li>
            <li><a href="costs.php">Costs & Budget</a></li>
            <li><a href="safety.php">Safety & Compliance</a></li>
            <li><a href="report.php">Reports</a></li>
             
    </nav>
    <br>
    <a href="forms/project.php"><button>+ Add Project</button></a>
    <table>
    <h2 style="text-align: center;">Project Details</h2>
                            <thead>
                                <tr>
                                    <th>ProjectID</th>
                                    <th>ProjectName</th>
                                    <th>Location</th>
                                    <th>StartDate</th>
                                    <th>EndDate</th>
                                    <th>ClientInfo</th>
                                    <th>ProjectManagerID</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($row = mysqli_fetch_array($result)) { 
                                    $id = $row['ProjectID'];
                                    $name = $row['Name'];
                                    $Location = $row['Location'];
                                    $StartDate = $row['StartDate'];
                                    $EndDate = $row['EndDate'];
                                    $ClientInfo = $row['ClientInfo'];
                                    $ProjectManager = $row['ProjectManagerID'];
                                    $ProjectStatus = $row['Status'];
                                ?>
                                <tr>
                                    <td><?php echo $id; ?></td>
                                    <td><?php echo $name; ?></td>
                                    <td><?php echo $Location; ?></td>
                                    <td><?php echo $StartDate; ?></td>
                                    <td><?php echo $EndDate; ?></td>
                                    <td><?php echo $ClientInfo; ?></td>
                                    <td><?php echo $ProjectManager; ?></td>
                                    <td><?php echo $ProjectStatus ; ?></td>
                                    <td><a class="btn btn-info text-white" href="edit.php?GetID=<?php echo $id?>"><img src="../images/Picture7.png" alt="Edit"></a> | <a href="delete.php?Del=<?php echo $id?>"><img src="../images/Picture6.png" alt="Delete"></a></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
</body>
</html>
</body>
</html>