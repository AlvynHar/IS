<?php

//1. Connect to the database

require_once 'connect.php';

if(isset($_POST['username'])){
    //do something
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashedpassword=md5($password);
    $role = $_POST['role'];

    //SQL to check if the user exists
    $sql = "SELECT * FROM users WHERE username='$username' AND password = '$hashedpassword'";

    $results = $conn->query($sql);
    if($results->num_rows > 0):
    //yeah, there is a user
        // log them in
        session_start();
        $data = $results->fetch_assoc();
        //set some variables in the session

        $_SESSION['username'] = $username;
        $_SESSION['role'] = $role;
        //redirect them to the dashboard

        header('Location:../dashboard.php?msg=Welcome');

    else: 
        //nope, we do not have a user
        //redirect back to login
        header('Location:../login.php?msg=error');

    endif;
} else {
    // Redirect the user back to the login
    header('Location:../login.html');
}