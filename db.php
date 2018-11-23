<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "mydb";

    // CREATE Connection
    $conn = mysqli_connect($servername, $username, $password);
    mysqli_select_db($conn, $database);

    //CHECK Connection
    if(!$conn)
    {
        die("Connection Failed : ". mysqli_connect_error());
    }
