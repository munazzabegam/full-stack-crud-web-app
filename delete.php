<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include ("config.php");

    $id = $_GET["id"];

    $sql = "DELETE FROM notes WHERE id = '$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully.";
        header("Location: crud.php");
    }

    $conn->close();
?>