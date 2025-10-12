<?php
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

?>

<!DOCTYPE html>
<html>
    <head>
        <style>
            .sidebar
            {
                width: 200px;
                position: fixed;
                left: 0px;
                top: 0px;
                height: 100%;
                background-color: #f1f1f1;
                padding-top: 10px;
            }

            .sidebar a
            {
                padding: 10px 20px;
                text-decoration: none;
                font-size: 18px;
                color: #6f6060ff;
                display: block;

            }

            .sidebar a:hover
            {
                color: #808080;
                background-color: #575757;
            }
            .content
            {
                margin-left: 220px;
                padding: 20px;
            }

            td, th
            {
                border: 1px solid;
                text-align:center;
                padding: 12px 15px;
            }
            #headline
            {
                background-color: #48D1CC;

            }
            table
            {
                border-collapse: collapse;
                width: 100%;
                max-width: 900px;
                margin: 20px auto;
            }
            form
            {
                width: 100%;
                max-width: 900px;
            }
        </style>
    </head>

    <body>
        <div class="sidebar">
            <h2 style="padding:10px 20px"><b>Menu</b></h2>
            <a href="form.php"><b>Add Member</b></a><br>
            <a href="member_list.php"><b>Member list</b></a><br>
            <a href="payment.php"><b>Payment</b></a><br>
            <a href="logout.php"><b>Logout</b></a><br>
        </div>

        <div class="content">
            <h2 style="text-align:center">Admission Fee</h2>
            <table border="2">
                <tr id="headline">
                    <th>MembershipType</th>
                    <th>Duration</th>
                    <th>Fee</th>
                    <th>Discount</th>
                    <th>Total After Discount</th>
                </tr>
                <tr>
                    <td>Basic</td>
                    <td>Month</td>
                    <td>1200 BDT</td>
                    <td>0.0%</td>
                    <td>1200 BDT</td>
                </tr>
                <tr>
                    <td>Standard</td>
                    <td>1 Year</td>
                    <td>14400 BDT</td>
                    <td>10%</td>
                    <td>12960 BDT</td>
                </tr>
                <tr>
                    <td>Premium</td>
                    <td>2 Year</td>
                    <td>28800 BDT</td>
                    <td>15%</td>
                    <td>24480 BDT</td>
                </tr>
            </table>

            <form action="../model/databaseconn.php" method= "POST" autocomplete="off">
                <fieldset>

                <legend style="text-align:center; color:blue"><b>Personal Information</b></legend>

                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>"><br>
                <span style="color:red;" name="nameErr"><?php echo $nameErr; ?> </span><br><br>
                 
                <label for="email">Email</label>
                <input type="email" name="email" value="<?php echo htmlspecialchars($email); ?>"><br>
                <span style="color:red;" name="emailErr"> <?php echo $emailErr; ?> </span><br><br>
                 
                <label for="call">Phone</label>
                <input type="text" name="call" value="<?php echo htmlspecialchars($call); ?>"><br>
                <span style="color:red;" name="callErr"> <?php echo $callErr; ?></span><br><br>

                <label for="address">Address</label>
                <input type="text" name="address" value="<?php echo htmlspecialchars($address); ?>"><br>
                <span style="color:red;" name="addressErr"> <?php echo $addressErr; ?></span><br><br>
                 
                <label for="age">Age</label>
                <input type="number" name="age" value="<?php echo htmlspecialchars($age); ?>"><br>
                <span style="color:red;" name="ageErr"> <?php echo $ageErr; ?></span><br><br>

                <label for="gender">Gender: </label>
                <input type="radio" name="gender" value="male" <?php if ($gender === "male") echo "checked";?> >Male
                <input type="radio" name="gender" value="female" <?php if ($gender === "female") echo "checked";?> >Female
                <input type="radio" name="gender" value="other" <?php if ($gender === "other") echo "checked";?> >Other <br>
                <span style="color:red;" name="genderErr"> <?php echo $genderErr; ?></span><br><br>

                <label for="membertyp">Membership type:</label>
                <input type="checkbox" name="membertyp" value="Basic">Basic
                <input type="checkbox" name="membertyp" value="Standerd">Standard
                <input type="checkbox" name="membertyp" value="Premium">Premium <br>
                <span style="color:red;" name="membertypErr"> <?php echo $membertypErr; ?></span><br>

                <label for="weight">Body Weight(KG):</label>
                <input type="text" name="weight" value="<?php echo htmlspecialchars($weight); ?>"><br>
                <span style="color:red;" name="weightErr"> <?php echo $weightErr; ?></span> <br><br>


                <label for="injury">Injury Description:</label>
                <textarea name="injury" id="injury" cols="45" row="10"></textarea><br>


                </fieldset>
                <input type="submit" value="Submit">
                
            </form>


        </div>

    </body>
</html>
