<?php
    $host= "localhost";
    $user= "root";
    $pass= "";
    $dbName = "my_database";

    function getConnection()
    {
        global $host;
        global $user;
        global $pass;
        global $dbName;

        $conn= mysqli_connect($host,$user,"",$dbName);
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