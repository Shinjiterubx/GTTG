<?php
include 'connect.php';

$select_id=$_POST['deleteBtn'];

var_dump($_POST['deleteBtn']);

$delete=mysqli_query($conn,"DELETE FROM posts WHERE pid='".$select_id."'");

if($delete){
    echo "<script>alert('Sikeres Eltávolította');</script>";
    header("Location: index.php");
  }

