<?php
    session_start();
    require 'db.php';

   
    if(isset($_POST['rating'], $_POST['comment'], $_SESSION['Name'], $_GET['pid'])) {
    
        $rating = mysqli_real_escape_string($conn, $_POST['rating']);
        $review = mysqli_real_escape_string($conn, $_POST['comment']);
        $name = mysqli_real_escape_string($conn, $_SESSION['Name']);
        $pid = mysqli_real_escape_string($conn, $_GET['pid']);

        $sql = "INSERT INTO review (pid, name, rating, comment)
                VALUES ('$pid', '$name', '$rating', '$review')";
        $result = mysqli_query($conn, $sql);

        
        if(!$result) {
            
            echo "Error: " . mysqli_error($conn);
        } else {
           
            header("Location: review.php?pid=".$pid);
            exit(); // Make sure to exit after header redirection
        }
    } else {
      
        echo "Error: Form fields are not set.";
    }
?>
