<?php
require("connect.php");
if (isset($_POST['insert'])) {
    $name = $_POST['name'];
    $rollno = $_POST['rollno'];
    $mark = $_POST['mark'];
    $grade = $_POST['grade'];
    $sql = "INSERT INTO STUDENT(stid,name, roll, mark, grade) VALUES ('NULL','$name','$rollno','$mark','$grade')";

    if (mysqli_query($conn, $sql)) {
        echo "inserted successfully";
    } else {
        echo "error inserting data" . mysqli_error($conn);
    }
}
?>