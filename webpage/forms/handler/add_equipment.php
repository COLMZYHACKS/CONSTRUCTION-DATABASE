<?php
require_once("../../../connect/conn.php");

if (isset($_POST["submit"])) {
    $description = $_POST['description'];
    $status = $_POST['status'];
    $maintenance = $_POST['Maintenance'];
    $inventory = $_POST['Inventory'];

    $sql = "INSERT INTO Equipment (Description, AvailabilityStatus,MaintenanceSchedule,InventoryLevel)
            VALUES ('$description', '$status','$maintenance','$inventory')";

$result = mysqli_query($conn, $sql);
        
if ($result) {
    header("Location: ../../equipment.php");
    exit();
} else {
    echo "Error in SQL query: " . mysqli_error($conn);
}
    $conn->close();
}
?>
