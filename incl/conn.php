<?php

$conn = mysqli_connect('localhost', 'root', '', 'zaid');

if(!$conn){
    echo "Database connection error: " . mysqli_connect_error();
}