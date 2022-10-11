<?php
include 'connect.php';

$select_id=$_POST['pid'];

$delete=mysqli_query($conn,"DELETE FROM posts WHERE id='".$select_id."'");

if($delete!=0){
    echo "<script>alert('Sikeres Eltávolította');</script>";
    header("Location: index.php");
  }
  else{
    echo "<script>alert('Sikertelen eltávolítás'); </script>";
    header("Location:index.php");
  }
