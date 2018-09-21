<?php
/**
 * Created by PhpStorm.
 * User: Rens
 * Date: 28-8-2018
 * Time: 13:24
 */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "solutio_notities";
$date = date("Y-m-d H:i");

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
    die("connection failed: " . $conn->connect_error);
}

    /* Insert user into database */
    $sql_notitie = $conn->prepare("INSERT INTO `notities`
                  ( `naam`,
                    `bedrijf`,
                    `telefoon`,
                    `adres`,
                    `postcode`,
                    `plaats`,
                    `notitie`,
                    `datum`)
                  VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    $sql_notitie->bind_param('ssssssss', 
                    $_POST['naam'], 
                    $_POST['bedrijf'], 
                    $_POST['telefoon'], 
                    $_POST['adres'], 
                    $_POST['postcode'], 
                    $_POST['plaats'], 
                    $_POST['notitie'], 
                    $date);



    $sql_notitie->execute();

    echo '<script language="javascript">';
    echo 'alert("message successfully sent")';
    echo '</script>';
    
    header("Location: index.php");