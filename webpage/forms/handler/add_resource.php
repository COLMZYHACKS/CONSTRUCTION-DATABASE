<?php
require_once("../../../connect/conn.php");
if (isset($_POST["submit"])) {
    $type = $_POST['type'];
    $description = $_POST['description'];
    $project_id = $_POST['project_id'];
    $quantity = $_POST['quantity'];
    $cost = $_POST['cost'];

    $sql = "INSERT INTO Resource (Type, Description, ProjectID, Quantity, Cost)
            VALUES ('$type', '$description', '$project_id', '$quantity', '$cost')";

$result = mysqli_query($conn, $sql);
        
if ($result) {
    header("Location: ../../resources.php");
    exit();
} else {
    echo "Error in SQL query: " . mysqli_error($conn);
}
    $conn->close();
}
?>
