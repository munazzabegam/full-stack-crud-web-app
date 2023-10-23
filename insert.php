<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include ("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $description = $_POST["description"];

    $sql = "INSERT INTO `notes` (`title`, `description`) VALUES ('$title', '$description');";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully.";
        header("Location: crud.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>