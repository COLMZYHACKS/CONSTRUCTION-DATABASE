<?php
require_once("../../../connect/conn.php");

if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $location = $_POST['location'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $client_info = $_POST['client_info'];
    $project_manager = $_POST['project_manager'];
    $status = $_POST['status'];

    $sql = "INSERT INTO Project (Name, Location, StartDate, EndDate, ClientInfo, ProjectManagerID, Status)
            VALUES ('$name', '$location', '$start_date', '$end_date', '$client_info', '$project_manager', '$status')";

$result = mysqli_query($conn, $sql);
        
if ($result) {
    header("Location: ../../projects.php");
    exit();
} else {
    echo "Error in SQL query: " . mysqli_error($conn);
}
    $conn->close();
}
?>
