<?php
    session_start();
    require 'db.php';

    // Check if the form fields are set
    if(isset($_POST['rating'], $_POST['comment'], $_SESSION['Name'], $_GET['pid'])) {
        
        // Sanitize user input
        $rating = mysqli_real_escape_string($conn, $_POST['rating']);
        $review = mysqli_real_escape_string($conn, $_POST['comment']);
        $name = mysqli_real_escape_string($conn, $_SESSION['Name']);
        $pid = mysqli_real_escape_string($conn, $_GET['pid']);

        // Prepare and execute SQL query
        $sql = "INSERT INTO review (pid, name, rating, comment)
                VALUES ('$pid', '$name', '$rating', '$review')";
        $result = mysqli_query($conn, $sql);

        // Check if the query executed successfully
        if(!$result) {
            // Print the error message
            echo "Error: " . mysqli_error($conn);
        } else {
            // Redirect to the review page
            header("Location: review.php?pid=".$pid);
            exit(); // Make sure to exit after header redirection
        }
    } else {
        // Handle the case when form fields are not set
        echo "Error: Form fields are not set.";
    }
?>
