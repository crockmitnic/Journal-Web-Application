<?php

session_start();

if (isset($_POST["signup"])) {
    $username = "";
    $password = "";
    $confirmPassword = "";
    $error = '';

    if (isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["confirmPassword"])) {
        $_SESSION["username"] = $username = $_POST["username"];
        $password = $_POST["password"];
        $confirmPassword = $_POST["confirmPassword"];
    }

    $connection = new mysqli("localhost", "root", "@root", "users");

    if ($connection->connect_error) {
        die("Connection failed!" . $connection->connect_error);
    }

    if ($password == $confirmPassword) {
        $sql = "INSERT INTO account VALUES('$username', '$password')";
        $connection->query($sql);

        header("Location: ../home.php");
    } else {
        header("Location: ../index.php?msg=error");
    }
    $connection->close();
}
?>