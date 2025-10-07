<?php
    $host= "localhost";
    $user= "root";
    $pass= "";
    $usersdb = "my_database";

    function getConnection()
    {
        global $host;
        global $user;
        global $pass;
        global $usersdb;

        $conn= mysqli_connect($host,$user,"",$usersdb);
        return $conn;
    }

    function validateUsers($name,$pass)
    {
        $conn= getConnection();
        $sql= "SELECT * FROM users WHERE userName='$name' AND password='$pass'";
        $result= mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($result);
        return $row;
    
    }

?>