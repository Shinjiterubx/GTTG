<?php
include 'connect.php';

session_start();

    function textvalidation($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $id = textvalidation(mysqli_real_escape_string($conn,$_POST['pid']));
    $title = textvalidation(mysqli_real_escape_string($conn,$_POST['title']));
    $comment = textvalidation(mysqli_real_escape_string($conn,$_POST['comment']));
 
    $insert_to = mysqli_query($conn,"INSERT into posts
    (pid, title, comment) 
    VALUES ('$id','$title','$comment')");

    if($insert_to!=0){
    echo "<script>alert('Sikeres hozzáadás');
    document.location.href='index.php.php' </script>";
    }
    else{
        echo "<script>alert('Sikertelen hozzáadás');
        document.location.href='index.php' </script>";
    }
?>