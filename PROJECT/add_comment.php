<?php
   include 'connect.php';


      $title = $_POST['inputTitle'];
      $comment = $_POST['inputText'];

      if ($title && $comment){

        $query = mysqli_query($conn,"INSERT into posts (title, comment) VALUES ('".$title."','".$comment."')");

        echo "<script>alert('Bejegyzés sikeresen létrehozva.');</script>";
        header("Location: index.php");
      }
      else
      {
        echo "<script>alert('Hiányzó adatok!');</script>";
        include 'index.php';
      }
    $conn->close();
?>