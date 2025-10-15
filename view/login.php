<?php
    session_start();

    if(isset($_SESSION["userName"]))
    {
        header("location:form.php");
    }

?>

<!DOCTYPE html>
<html>
    <head>
         <style>
            body
            {
                font-family: Arial, Helvetica, sans-serif;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                min-height: 100vh;
                margin: 0;
            }
            form 
            {
                border: 9px solid #f1f1f1;
                width: 50%;
                min-width: 300px;
            }
            
            input[type=text], input[type=password] 
            {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }
            button 
            {
                background-color: #04aa6d;
                color: white;
                padding: 15px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
            }
            button:hover 
            {
                opacity: 0.8;
            }
            span.pass
            {
                float: right;
                padding-top: 16px;
            }
            .c2
            {
                padding: 50px;
            }
         </style>
    </head>
    <body>
        <h2 style="text-align:center"> this is login page</h2>

        <form action="../controller/login_authen.php" method="post">
            <div class="c2">
                <label for="userName"><b>User Name</b></label>
                <input type="text" placeholder="Enter userName" name="userName" autocomplete="off"><br>
                <span style="color:red;" name="nameErr"><?php if(isset($_GET["NameErr"])){echo $_GET["NameErr"]; } ?> </span><br><br>
                
                <label for="pass"><b>Password </b></label>
                <input type="password" placeholder="Enter password" name="pass"><br>
                <span style="color:red;" name="passErr"><?php if(isset($_GET["passErr"])){echo $_GET["passErr"]; } ?></span><br>

                <button type="submit" name="submit">Login</button>
                <span name="invalidUser" style="color:red;"><?php if(isset($_GET["invalidUser"])){echo $_GET["invalidUser"]; } ?></span>
                
            </div>
            <div class="c2" style="background-color: #f1f1f1">
                <span class="pass">Forgot <a href='#'>Password?</a></span>
            </div>
        </form>
    </body>
</html>