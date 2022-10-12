<?php
include 'connect.php';

$post_id=$_POST['modifyBtnId'];
$modify_ID=$_POST['modifyBtn'];

if ($modify_ID == 0){ 
  mysqli_query($conn, "UPDATE posts SET modify = 1 WHERE pid='$post_id'");
  header("Location: index.php");
} 
else{
  $title = $_POST['inputTitle'];
  $comment = $_POST['inputText'];
  
  if ($title && $comment) {
    $update=mysqli_query($conn,"UPDATE posts SET 
    title='$title', comment='$comment', modify = 0 WHERE pid='$post_id'");
  
    echo "<script>alert('Sikeres Frissítés!');</script>";
    header("Location: index.php");
  }
  else{
    echo "<script>alert('Hiányzó adatok!');</script>";
    include 'index.php';
  }
}