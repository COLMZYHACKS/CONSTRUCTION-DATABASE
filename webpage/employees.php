<?php
require_once("../connect/conn.php");
$mysql= ("SELECT * FROM employee_details");
$result= mysqli_query($conn, $mysql);
$mysql2= ("SELECT * FROM employee_assign");
$result2 = mysqli_query($conn, $mysql2);
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
            <li  class="active"><a href="employees.php">Employees</a></li>
            <li><a href="equipment.php">Equipment</a></li>
            <li><a href="costs.php">Costs & Budget</a></li>
            <li><a href="safety.php">Safety & Compliance</a></li>
            <li><a href="report.php">Reports</a></li>
             
    </nav>
    <br>
    <a href="forms/employeesform.php"><button>+ Add Employee</button></a>
    <table>
            <h2 style="text-align: center;">Employee Details</h2>
                            <thead>
                                <tr>
                                    <th>EmployeeID</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>JobRole</th>
                                    <th>Certification</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($row = mysqli_fetch_array($result)) { 
                                    $id = $row['EmployeeID'];
                                    $name = $row['Name'];
                                    $Phone = $row['Phone'];
                                    $Email = $row['Email'];
                                    $JobRole = $row['JobRole'];
                                    $Certification = $row['Certifications'];
                                ?>
                                <tr>
                                    <td><?php echo $id; ?></td>
                                    <td><?php echo $name; ?></td>
                                    <td><?php echo $Phone; ?></td>
                                    <td><?php echo $Email; ?></td>
                                    <td><?php echo $JobRole; ?></td>
                                    <td><?php echo $Certification; ?></td>
                                    <td><a class="btn btn-info text-white" href="edit.php?GetID=<?php echo $id?>"><img src="../images/Picture7.png" alt="Edit"></a> | <a href="delete.php?Del=<?php echo $id?>"><img src="../images/Picture6.png" alt="Delete"></a></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
<br>
                        <h2 style="text-align: center;">Employees And their Assigned Projects</h2>
    <table>
                            <thead>
                                <tr>
                                    <th>EmployeeID</th>
                                    <th>Name</th>
                                    <th>ProjectID</th>
                                    <th>ProjectName</th>
                                    <th>ProjectStatus</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($row = mysqli_fetch_array($result2)) { 
                                    $id = $row['EmployeeID'];
                                    $name = $row['Name'];
                                    $ProjectID = $row['ProjectID'];
                                    $ProjectName = $row['ProjectName'];
                                    $ProjectStatus = $row['ProjectStatus'];
                                ?>
                                <tr>
                                    <td><?php echo $id; ?></td>
                                    <td><?php echo $name; ?></td>
                                    <td><?php echo $ProjectID; ?></td>
                                    <td><?php echo $ProjectName; ?></td>
                                    <td><?php echo $ProjectStatus; ?></td>
                                    <td><a class="btn btn-info text-white" href="edit.php?GetID=<?php echo $id?>"><img src="../images/Picture7.png" alt="Edit"></a> | <a href="delete.php?Del=<?php echo $id?>"><img src="../images/Picture6.png" alt="Delete"></a></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
</body>
</html>
</body>
</html>