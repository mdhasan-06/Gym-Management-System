<?php
    function Memberconn()
    {
        if(isset($_GET["success"]) && $_GET["success"] == 1)
        {
            echo "<script> 
                  alert('Form submitted successfully!');
                  window.history.replaceState({}, document.title, 'form.php');
                  </script>";
                
        }
        
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
            
            if(!$hasErr)
            {
                header("Location:member_list.php");
            }
        
        }

    }

?>