<?php
    require_once("../model/databaseconn.php");
   
    $sql= "SELECT * FROM gym_management";
    $outcome= mysqli_query($conn,$sql);

    echo "<h2>Members List</h2>";
    echo "Total number of members: " . mysqli_num_rows($outcome). "<br><br>";
   
    if(mysqli_num_rows($outcome) > 0)
    {
        echo "<table border='1' cellpadding='5'>";
        echo "<tr> 
                 <th>S.No</th>
                 <th>ID</th>
                 <th>Members</th>
                 <th>Email</th> 
                 <th>Phone</th>
                 <th>Address</th>
                 <th>Age</th>
                 <th>Gender</th>
                 <th>Status</th>
                 <th>Weight</th>
                 <th>Injury</th>
              </tr>";
        
        $serial= 1;
        while ($row = mysqli_fetch_assoc($outcome))
        {
            echo "<tr>";
            echo "<td>" . $serial++ . "</td>";
            echo "<td>" . htmlspecialchars($row["id"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["Members"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["Email"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["Phone"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["Address"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["Age"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["Gender"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["Status"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["Weight"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["Injury"]) . "</td>";

             echo "<td>
                <a href='../model/delete_member.php?id=" . $row['id'] . "' 
                   onclick='return confirm(\"Are you sure to delete this member?\");'>
                   Delete
                </a>
              </td>";

            echo "</tr>";
        }
        echo "</table>";
    }

    else
    {
         echo "No records found.";
    }
    
    $conn->close();

    echo "<br>";
    echo "<a href='form.php'>Back Home</a>";

?>

