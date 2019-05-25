<?php
session_start();

if (isset($_POST["delete"])) {
    $index = $error = '';

    if (!empty($_POST["deleteField"])) {
            $index = $_POST['deleteField'];
            
            $connection = new mysqli("localhost", "root", "@root", "users");

            if ($connection->connect_error) {
                die("Connection failed!" . $connection->connect_error);
            }

            $sql = 'DELETE FROM record WHERE record_id="' . $index . '"';
            $connection->query($sql);

            $connection->close();

    }
    header("Location: ../home.php?msg=success");
}
?>