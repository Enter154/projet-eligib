<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername, $username, $password);

    if ($conn->connect_errno) {
        printf("Échec de la connexion : %s\n", $conn->connect_error);
        exit();
    }
?>