<?php
    include '../inc/connect.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }

    $query = "DELETE FROM contact WHERE id= :id";
    $query = $conn->prepare($query);

    $query->execute(['id' => $id]);


    header("Location: tables.php");