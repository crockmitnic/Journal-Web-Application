<?php

session_start();

if (isset($_POST["signin"])) {
    $username = "";
    $password = "";
    $error = '';

    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $_SESSION["username"] = $username = $_POST["username"];
        $password = $_POST["password"];
    }

    $connection = new mysqli("localhost", "root", "@root", "users");

    if ($connection->connect_error) {
        die("Connection failed!" . $connection->connect_error);
    }

    $sql = "SELECT * FROM account";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        $flag = false;
        while ($row = $result->fetch_assoc()) {
            if (($row["username"] === $username) && ($row["password"] === $password)) {
                $flag = true;
                break;
            } else {
                continue;
            }
        }

        if ($flag) {
            header("Location: ../home.php");
        } else {
            header("Location: ../index.php?msg=error");
        }
    } else {
        echo "0 results!";
    }

    $connection->close();
}
?>