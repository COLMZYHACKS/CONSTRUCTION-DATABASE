<?php
require_once("../connect/conn.php");
// Fetch data
$employees = $conn->query("SELECT COUNT(*) AS total FROM employee")->fetch_assoc()['total'];
$projects = $conn->query("SELECT COUNT(*) AS total FROM project WHERE Status = 'In progress' ")->fetch_assoc()['total'];
$pending = $conn->query("SELECT COUNT(*) AS total FROM project WHERE Status = 'Pending' ")->fetch_assoc()['total'];
$equipments = $conn->query("SELECT COUNT(*) AS total FROM equipment WHERE AvailabilityStatus = 'Available' ")->fetch_assoc()['total'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/dash.css">
    <title>Construction</title>
</head>
<body>
    <nav>      
    <a href="../index.php"><img src="../images/UMAT LOGO.png" height="40px" width="40px"></a>
            <li class="active"><a href="Dashboard.php">Dashboard</a></li>
            <li><a href="projects.php">Projects</a></li>
            <li><a href="tasks.php">Tasks</a></li>
            <li><a href="resources.php">Resources</a></li>
            <li><a href="employees.php">Employees</a></li>
            <li><a href="equipment.php">Equipment</a></li>
            <li><a href="costs.php">Costs & Budget</a></li>
            <li><a href="safety.php">Safety & Compliance</a></li>
            <li><a href="report.php">Reports</a></li>
             
    </nav>
    <br>
    <div class="dashboard-container">
        <header>
           
            <h3 style="margin-top: 5px;">Construction Dashboard</h3>
        </header>
        <div class="dashboard-cards">
            <div class="card">
            <a href="employees.php">
                <div class="icon">
                    <img src="../images/Picture1.png" alt="Employees Icon">
                </div>
                <div class="card-info">
                    <h2><?php echo $employees; ?></h2>
                    <p>Employees</p>
                </div>
                </a>
            </div>
            <div class="card">
            <a href="projects.php">
                <div class="icon">
                    <img src="../images/Picture3.png" alt="Ongoing Projects Icon">
                </div>
                <div class="card-info">
                    <h2><?php echo $projects; ?></h2>
                    <p>Ongoing Projects</p>
                </div>
            </a>
            </div>
            <div class="card">
            <a href="projects.php">
                <div class="icon">
                    <img src="../images/Picture2.png" alt="Pending Icon">
                </div>
                <div class="card-info">
                    <h2><?php echo $pending; ?></h2>
                    <p>Pending Projects</p>
                </div>
            </a>
            </div>
            <div class="card">
            <a href="equipment.php">
                <div class="icon">
                    <img src="../images/Picture4.png" alt="Available Equipments Icon">
                </div>
                <div class="card-info">
                    <h2><?php echo $equipments; ?></h2>
                    <p>Available Equipments</p>
                </div>
            </a>
            </div>
        </div>
    </div>
</body>
</html>

</body>
</html>
</body>
</html>