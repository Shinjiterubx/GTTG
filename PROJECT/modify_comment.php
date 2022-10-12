<?php
include 'connect.php';

$select_id=$_POST['modifyBtn'];
$modify_ID=$_POST['pid'];

$title = $_POST['inputTitle'];
$comment = $_POST['inputText'];

if ($modify_ID == 0){ 
  $modify_ID = 1;
  header("Location: index.php");
} 
else{
  $update=mysqli_query($conn,"UPDATE posts SET 
  title='$title', comment='$comment' WHERE modify='$select_id'");
  $modify_ID = 0;
  echo "<script>alert('Sikeres Frissítés!');</script>";
  header("Location: index.php");
}