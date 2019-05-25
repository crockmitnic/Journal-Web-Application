<?php
session_start();

header("Content-Type: application/json");

$connection = new mysqli("localhost", "root", "@root", "users");

if(!$connection) {
    die("Connection failed!");
}

$query = 'SELECT product_name, total_price FROM record WHERE username="' . $_SESSION['username'] . '"';

$result = $connection->query($query);
$data1 = array();

foreach ($result as $row) {
    $data1[] = $row;
}

$query = 'SELECT product_name, SUM(total_price) as "total_price" FROM record WHERE username="' . $_SESSION['username'] . '" GROUP BY product_name';

$result = $connection->query($query);
$data2 = array();

foreach ($result as $row) {
    $data2[] = $row;
}

$query = 'SELECT MONTH(date) as "month", SUM(total_price) as "total_price" FROM record WHERE username="' . $_SESSION['username'] . '" GROUP BY MONTH(date)';

$result = $connection->query($query);
$data3 = array();

foreach ($result as $row) {
    $data3[] = $row;
}

$table = ['a'=>$data1, 'b'=>$data2, 'c'=>$data3];

$result->close();
$connection->close();

print json_encode($table);
?>