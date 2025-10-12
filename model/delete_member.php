<?php
    require_once("databaseconn.php");

    if(isset($_GET["id"]))
    {
        $id= $_GET["id"];
        $sql= "DELETE FROM gym_management WHERE id = ?";
        $stmt= $conn->prepare($sql);
        $stmt->bind_param("i",$id);

        if($stmt->execute())
        {
            echo "<script> 
              alert('Member delete successfully');
              window.location.href='../view/member_list.php';
             </script>";
            //header("Location:../view/member_list.php");
            exit();
        }
        else
        {
            echo "Delete Failed" . mysqli_error($conn);

        }
        $stmt->close();

    }
    $conn->close();

?>