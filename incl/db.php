<?php
$conn = mysqli_connect('localhost','root','','zaid');

if(!$conn){
    echo 'Error: '. mysqli_connect_error();
}
?>
