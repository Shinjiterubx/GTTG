<?php
include 'connect.php';

session_start();

    function textvalidation($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $title = textvalidation(mysqli_real_escape_string($conn,$_POST['title']));
    $comment = textvalidation(mysqli_real_escape_string($conn,$_POST['comment']));
 
    $update_to = mysqli_query($conn,"UPDATE posts SET title='$tile', comment='$comment'");

    if($update_to!=0){
    echo "<script>alert('Sikeres hozzáadás');
    document.location.href='index.php' </script>";
    }
    else{
        echo "<script>alert('Sikertelen hozzáadás');
        document.location.href='index.php' </script>";
    }
?>