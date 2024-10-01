<?php
require_once("../../../connect/conn.php");

if (isset($_POST["submit"]))  {
    $project_id = $_POST['project_id'];
    $date = $_POST['date'];
    $description = $_POST['description'];
    $ComplianceStatus = $_POST['ComplianceStatus'];

    $sql = "INSERT INTO safetyincident(ProjectID, Description, Date, ComplianceStatus)
            VALUES ('$project_id', '$description', '$date', '$ComplianceStatus')";

    $result = mysqli_query($conn, $sql);
        
if ($result) {
    header("Location: ../../safety.php");
    exit();
} else {
    echo "Error in SQL query: " . mysqli_error($conn);
}
    $conn->close();
}
?>
