<?php
require_once("../../../connect/conn.php");
if (isset($_POST["submit"])) {
    $project_id = $_POST['project_id'];
    $amount = $_POST['amount'];
    $ExpenseType = $_POST['ExpenseType'];
    $Date = $_POST['date'];

    $sql = "INSERT INTO Cost (ProjectID, ExpenseType, Amount, Date)
            VALUES ('$project_id', '$ExpenseType', '$amount', '$Date')";

$result = mysqli_query($conn, $sql);
        
if ($result) {
    header("Location: ../../costs.php");
    exit();
} else {
    echo "Error in SQL query: " . mysqli_error($conn);
}
    $conn->close();
}
?>
