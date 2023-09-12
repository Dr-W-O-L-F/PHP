<?php
require("connect.php");
?>
<html>

<head>
    <title>
        Student CRUD
    </title>
</head>

<body>
    <form action="inst.php" method="post">
        <br><br>
        student name:<input type="text" name="name"><br><br>
        student Roll No:<input type="text" name="rollno"><br><br>
        student mark:<input type="text" name="mark"><br><br>
        student grade:<input type="text" name="grade"><br><br>
        <input type="submit" name="insert" value="insert"><br><br>
       <!-- <br><br>
        <br><br>-->
    </form>
    <form action="delst.php" method="post">
        <br>student mark:<input type="text" name="mark1"><br><br>
        <input type="submit" name="Delete" value="Delete"><br><br>
    </form>
    <form action="upst.php" method="post">
        <br><br>
        student mark:<input type="text" name="mark2"><br><br>
        student grade:<input type="text" name="grade1"><br><br>
        <input type="submit" name="Update" value="Update">
    </form>
    <form action="dist.php" method="post">
        to display all student details:<input type="submit" name="Display" value="Display"><br>

    </form>
    <form action="sest.php" method="post">
        Search using roll number:
        <input type="text" name="roll">
        <input type="submit" name="Search" value="Search">       
    </form>
</body>
</html>