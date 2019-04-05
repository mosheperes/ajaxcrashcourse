<?php

// connect to a database
$conn = mysqli_connect('localhost:8888','root','','ajaxtest');


//echo "processing";

// check for get variable

if (isset($_GET['name'])){
    echo "your name is " . $_GET['name'];
}

if(isset($_POST['name'])){
    $name= mysqli_real_escape_string($conn,$_POST['name']);
echo 'your name is ' . $_POST['name'];

$query="INSERT INTO users(name) VALUES ('$name')";

if (mysqli_query($conn,$query)){
    echo "user added";
} else{
    echo "error: ". mysqli_error($conn);
}
}

//if(isset($_POST['submit'])){
//    $_POST['submit']++;
//}
