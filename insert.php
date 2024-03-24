<?php

$a = $_POST["User_name"];

$b = $_POST["Password"];

$c = $_POST["Phone-no"];

$conn = mysqli_connect("localhost", "root", "", "register")

    or die("Failed");

$sql = "insert into sign-in(User_name,Password,Phone-no) Values ('$a','$b','$c')";

$result = mysqli_query($conn, $sql)
    or die("fail");

if ($result) {

    echo 1;
} else {
    echo 2;
}

?>