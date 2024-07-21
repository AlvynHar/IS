<?php

//Declaring variables
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

//Establishing a connection
$host="localhost";
$user="root";
$password="";
$dbname="is";
$port="3306";
$conn = new mysqli($host, $user, $password, $dbname, $port);
if($conn->connect_error){
    die('Connection Failed: '.$conn->connect_error);
}else {

    //INSERT data into database

    $sql="INSERT INTO 
    contact (`name`, `email`, `phone`, `subject`,`message`) 
    VALUES('$name', '$email','$phone','$subject','$message')";
    //execute the query
    if($conn->query($sql) === TRUE){
        header('Location:../back.php?msg=thanks');
    }else{
        echo "Failed";
    }
}
?>