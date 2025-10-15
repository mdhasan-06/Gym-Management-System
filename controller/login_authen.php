<?php
require_once("userController.php");
echo "userController.php loaded <br>";
$userNameErr= $passErr= "";
$hasErr= false;
$userName= $pass= "";

if(($_SERVER["REQUEST_METHOD"] == "POST") && isset($_POST["submit"]))
{
    if(empty($_POST["userName"]))
    {
        $userNameErr= "Enter your username";
        $hasErr= true;
    }
    else{
        $userName= $_POST["userName"];
    }
    if(empty($_POST["pass"]))
    {
        $passErr= "Enter your password";
        $hasErr= true;
    }
    else{
        $pass= $_POST["pass"];
    }

    if($hasErr)
    {
        header("Location:../view/login.php?NameErr=$userNameErr&passErr=$passErr");
    }

    else
    {
        $returnedValue=validateUser($userName, $pass);

        if(!$returnedValue)
        {
            header("location:../view/login.php?invalidUser='Invalid User.'");
        }
        
        else
        {
            session_start();
            $_SESSION["userName"]= $returnedValue["name"];
            header("location:../view/form.php");
        }
    }
}
?>