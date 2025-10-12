<!DOCTYPE html>
<html>
<head>
    <title>Gym Management System</title>
    <style>
    body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
        }
        
    .c1 {
        background-color: tomato;
        color: white;
        border: 2px solid black;
        margin: 10px;
        padding: 40px;
        }

        .btn {
            background-color: #ffba6be7;
            color: #fff;
            padding: 14px 30px;
            text-decoration: none;
            border-radius: 50px;
            font-size: 16px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(255, 107, 107, 0.4);
        }

        .btn:hover {
            opacity: 0.5;
        }
</style>
</head>
<body>

<div class="c1">
<h2>Admin Panel</h2>
<p>Manage registrations, track progress, and handle payments — all in one sleek dashboard.
    Click below to enter the admin panel.</p> 
<a href="login.php" class="btn">Admin login</a>
    </div>
<div class="c1">
<h2>Gym Trainer</h2>
<p>Train the member's, track member's progress, and create workout class & schedule — all in one sleek dashboard. 
     Click below to enter the trainer panel.</p>
<a href="login.php" class="btn">Trainer login</a>
    </div>
<div class="c1">
<h2>Member</h2>
<p>See assigned class, workout schedule, and status — all in one sleek dashboard.
    Click below to enter the member panel.</p>
<a href="login.php" class="btn">Member login</a>
</div>

</body>
</html>

