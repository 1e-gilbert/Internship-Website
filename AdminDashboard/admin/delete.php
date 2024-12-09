<?php
session_start();

$connection = mysqli_connect("localhost", "root", "1234", "login");

//DELETE DATA
if (isset($_POST['delete_btn'])) {
    $id = $_POST['user_id'];

    // Prepare the SQL query with a placeholder
    $delete_query = $connection->prepare("DELETE FROM users WHERE id = ?");

    // Check if the statement was prepared successfully
    if ($delete_query) {
        // Bind the user ID parameter to the query
        $delete_query->bind_param("i", $id); // Assuming id is an integer

        // Execute the prepared statement
        $delete_query_run = $delete_query->execute();

        // Check if data was deleted successfully
        // After your delete operation
        if (isset($_POST['delete_btn'])) {
            // ... [delete operation code]

            if ($delete_query_run) {
                $_SESSION['status'] = "DATA DELETED SUCCESSFULLY"; // Update the session message
                $_SESSION['status_code'] = "success";
            } else {
                $_SESSION['status'] = "DATA DELETION FAILED";
                $_SESSION['status_code'] = "error";
            }

            // Redirect to the index page
            header('location: index.php');
        }
    }

    // Close the connection
    mysqli_close($connection);
}
