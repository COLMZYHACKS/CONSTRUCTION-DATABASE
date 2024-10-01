<?php
require_once("../../../connect/conn.php");
if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $jobrole = $_POST['jobrole'];
    $certifications = $_POST['certifications'];

    $sql = "INSERT INTO Employee (Name, Phone, Email, JobRole, Certifications)
            VALUES ('$name', '$phone', '$email', '$jobrole', '$certifications')";

$result = mysqli_query($conn, $sql);
        
if ($result) {
    header("Location: ../../employeeform.php");
    exit();
} else {
    echo "Error in SQL query: " . mysqli_error($conn);
}
    $conn->close();
}
?>
