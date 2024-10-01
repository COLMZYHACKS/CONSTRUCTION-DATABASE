<?php
require_once("../../../connect/conn.php");
if (isset($_POST["submit"])) {
    $project_id = $_POST['project_id'];
    $description = $_POST['description'];
    $due_date = $_POST['due_date'];
    $status = $_POST['status'];
    $assigned_to = $_POST['assigned_to'];

    $sql = "INSERT INTO Task (ProjectID, Description, DueDate, CompletionStatus, AssignedTo)
            VALUES ('$project_id', '$description', '$due_date', '$status', '$assigned_to')";

$result = mysqli_query($conn, $sql);
        
if ($result) {
    header("Location: ../../tasks.php");
    exit();
} else {
    echo "Error in SQL query: " . mysqli_error($conn);
}
    $conn->close();
}
?>
