<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbName = "my_database";

    $conn = mysqli_connect($host, $user, $pass, $dbName);

    if(!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {

        $Members = $_POST["name"];
        $Email = $_POST["email"];
        $Phone = $_POST["call"];
        $Address = $_POST["address"];
        $Age = $_POST["age"];
        $Gender = $_POST["gender"];
        $Status = $_POST["membertyp"];
        $Weight = $_POST["weight"];
        $Injury = $_POST["injury"];

    $stmt = $conn ->prepare ("INSERT INTO gym_management (Members, Email, Phone, Address, Age, Gender, Status, Weight, Injury)
            VALUES (?,?,?,?,?,?,?,?,?)");

    $stmt->bind_param("ssssissss", $Members,$Email,$Phone,$Address,$Age,$Gender,$Status,$Weight,$Injury);

    if($stmt->execute())
    {
       header("Location:../view/form.php?success=1");
        exit();
    } 
    else {
        echo "Failed to insert: " . mysqli_error($conn);
    }

    $stmt->close();

   }

?>
