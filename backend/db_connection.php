<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "restorn_management";

    $conn = new mysqli($servername, $username,$password,$dbname);

    if(!$conn)
    {
        echo "Not Connected Successfully";
    }

?>