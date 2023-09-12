<?php
require("connect.php");
if (isset($_POST['Update'])) {
    $mark2 = $_POST['mark2'];
    $grade1 = $_POST['grade1'];
    $sql = "UPDATE STUDENT SET grade='$grade1' WHERE mark<=$mark2";
    if (mysqli_query($conn, $sql)) {
        echo "updated successfully";
    } else {
        echo "error updating data" . mysqli_error($conn);
    }
}
?>