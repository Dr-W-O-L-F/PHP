<?php
require("connect.php");

if(isset($_POST['Search']))
{
    $roll=$_POST['roll'];

    $sql1="SELECT * FROM student WHERE roll=$roll";
    $result=mysqli_query($conn,$sql1);
    if(mysqli_num_rows($result)>0)
    {
        $row=mysqli_fetch_assoc($result);
        echo "STUDENT ID:   ".$row["stid"]."<br>";
        echo "STUDENT NAME:   ".$row["name"]."<br>";
        echo "ROLL NO:   ".$row["roll"]."<br>";
        echo "MARK:   ".$row["mark"]."<br>";
        echo "GRADE:   ".$row["grade"]."<br>";
    }
    else
    {
        echo "0 result"."<br>";
    }
}
    ?>