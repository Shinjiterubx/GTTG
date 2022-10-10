<?php
$conn = mysqli_connect("localhost","root","","posts");

if(!$conn){
    die("A csatlakozás sikertelen!");
}
else{
    $sikeres = true;
}