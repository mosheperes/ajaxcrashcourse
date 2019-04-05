<?php
$conn = mysqli_connect('localhost:8888','root','','ajaxtest');

$query = 'SELECT * FROM users';

// get result
$result= Mysqli_query($conn,$query);

// Fetch Data
$users=mysqli_fetch_all($result,MYSQLI_ASSOC);

echo json_encode($users);