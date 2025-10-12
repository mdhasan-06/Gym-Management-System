<?php
    $nameErr= $emailErr= $callErr= $addressErr= $ageErr= $genderErr= $weightErr= $membertypErr= "";
    $hasErr= false;
    $name= $email= $call= $address= $age= $gender= $weight= $membertyp= "";

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(empty($_POST["name"]))
        {
            $nameErr= "*Name can't be empty";
            $hasErr= true;
        }
        else
        {
            $name= $_POST["name"];
        }
        
        if(empty($_POST["email"]))
        {
            $emailErr= "*Email can't be empty";
            $hasErr= true;
        }
        else
        {
            $email= $_POST["email"];
        }

        if(empty($_POST["call"]))
        {
            $callErr= "*Enter your phone number";
            $hasErr= true;
        }
        else
        {
            $call= $_POST["call"];
        }

        if(empty($_POST["address"]))
        {
            $addressErr= "*Enter your address";
            $hasErr= true;
        }
        else
        {
            $address= $_POST["address"];
        }

        if(empty($_POST["age"]))
        {
            $ageErr= "*Enter your age";
        }
        else
        {
            $age= $_POST["age"];
        }
        
        if(empty($_POST["gender"]))
        {
            $genderErr= "*Select your gender";
            $hasErr= true;
        }
        else
        {
            $gender= $_POST["gender"];
        }

        if(empty($_POST["weight"]))
        {
            $weightErr= "*Enter your body weight";
            $hasErr= true;
        }
        else
        {
            $weight= $_POST["weight"];
        }

        if(empty($_POST["membertyp"]))
        {
            $membertypErr= "*Please select membership type";
            $hasErr= true;
        }
        else
        {
            $membertyp= $_POST["membertyp"];
        }

        if($hasErr)
        {
            header("Location:index.php?userNameErr=$nameErr&emailErr=$emailErr&callErr=$callErr&addressErr=$adderssErr
            &ageErr=$ageErr&genderErr=$genderErr&weightErr=$weightErr&membertypErr=$membertypErr");
        }
        else
        {
            header("Location:../model/databasecon.php");
        }
    }
?>   