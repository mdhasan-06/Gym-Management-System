<!DOCTYPE html>
<html>
    <head>
        <style>
            body {
            font-family: Arial, sans-serif;
            background-color:rgb(240, 240, 240);
            text-align: center;
            margin-top: 125px;
        }
        </style>
    </head>
    <body>
        <p> this is login page</p>
        <form>
            <label for="userName"><b>User Name</b></label>
            <input type="text" placeholder="Enter userName" name="userName" autocomplete="off" required><br><br>

            <label for="pass"><b>Password</b></label>
            <input type="password" placeholder="Enter password" id="pass" name="pass" required><br>

            <button type="submit">Login</button>

        </form>
    </body>
</html>