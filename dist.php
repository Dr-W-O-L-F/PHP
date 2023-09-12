<?php
require("connect.php");
if(isset($_POST['Display'])){
    $sql = "SELECT stid, name, roll, mark, grade FROM STUDENT";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Student id: " . $row["stid"] . "<br><br>";
            echo "Student name: " . $row["name"] . "<br><br>";
            echo "Student rollno: " . $row["roll"] . "<br><br>";
            echo "Student mark: " . $row["mark"] . "<br><br>";
            echo "Student grade: " . $row["grade"] . "<br><br>";
        }
    } else {
        echo "zero result";
    }
}
?>