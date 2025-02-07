<?php
include 'db_config.php';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql_expenses = "SELECT SUM(amount) AS total_expenses FROM expenses";
$sql_income = "SELECT SUM(amount) AS total_income FROM income";

$result_expenses = $conn->query($sql_expenses);
$result_income = $conn->query($sql_income);

$total_expenses = $result_expenses->fetch_assoc()['total_expenses'];
$total_income = $result_income->fetch_assoc()['total_income'];

echo "<h2>إجمالي المصاريف: " . $total_expenses . "</h2>";
echo "<h2>إجمالي الإيرادات: " . $total_income . "</h2>";

$conn->close();
?>