<?php
require("connect.php");
if (isset($_POST['Delete'])) {
    $mark1 = $_POST['mark1'];
    $sql = "DELETE FROM STUDENT WHERE mark<=$mark1";
    if (mysqli_query($conn, $sql)) {
        echo "deleted successfully";
    } else {
        echo "error deleting data" . mysqli_error($conn);
    }
}
?>