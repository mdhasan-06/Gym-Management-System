<!DOCTYPE html>
<html>
    <head>
        <style>
            .style
            {
                display: flex;
            }
        </style>

    </head>
    <body>
        <div class="style">
            <form action="" method="post">
            <label for="mname">Member Name</label><br>
            <input type="text" id="mname" name="mname"><br><br>

            <label for="email">Email</label><br>
            <input type="email" id="email" name="email"><br><br>

            <label for="phone">Phone</label><br>
            <input type="tel" name="phone" id="phone"><br><br>

            <label for="membership">Choose payment:</label><br>
                <input type="checkbox" name="membership" value="Basic">Basic <br>
                <input type="checkbox" name="membership" value="Standerd">Standard <br>
                <input type="checkbox" name="membership" value="Premium">Premium <br>
            
            </form>       
        </div>
                 
    </body>
</html>