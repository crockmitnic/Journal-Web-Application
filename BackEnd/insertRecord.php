<?php
session_start();

if (isset($_POST["save_record"])) {
    $username = $date = $type = $product_name = $quantity = $price_per_unit = $total_price = $description = "";
    $error = '';

    if ((empty($_POST["product_name"])) || 
        (empty($_POST["date"])) || 
        (empty($_POST["product_name"])) || 
        (empty($_POST["quantity"])) || 
        (empty($_POST["price_per_unit"])) || 
        (empty($_POST["description"])))
    {
        header("Location: ../addRecord.php?msg=error");
    } else {
        $username = $_SESSION["username"];
        $date = $_POST["date"];
        $type = $_POST["type_of_record"];
        $product_name = $_POST["product_name"];
        $quantity = $_POST["quantity"];
        $price_per_unit = $_POST["price_per_unit"];

        $total_price = $price_per_unit * $quantity;

        $description = $_POST["description"];

        $connection = new mysqli("localhost", "root", "@root", "users");
        if ($connection->connect_error) {
            die("Connection failed!" . $connection->connect_error);
        }
        $sql = "INSERT INTO record(username, date, type, product_name, quantity, price_per_unit, total_price, description) VALUES('$username', '$date', '$type', '$product_name', '$quantity', '$price_per_unit', '$total_price', '$description')";
        $connection->query($sql);

        $connection->close();

        header("Location: ../addRecord.php?msg=success");
    }
}
?>