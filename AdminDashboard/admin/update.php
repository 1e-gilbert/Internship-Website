<?php
session_start();

$connection = mysqli_connect("localhost", "root", "1234", "login");

// UPDATE
if (isset($_POST['update_btn'])) {
    $id = $_POST['id'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Prepare the SQL query with placeholders
    $update_query = $connection->prepare("UPDATE users SET firstName = ?, lastName = ?, email = ?, password = ?, role = ? WHERE id = ?");

    // Check if the statement was prepared successfully
    if ($update_query) {
        // Bind the parameters to the query
        $update_query->bind_param("sssssi", $firstName, $lastName, $email, $password, $role, $id); // id is an integer, rest are strings

        // Execute the prepared statement
        $update_query_run = $update_query->execute(); // Execute the update query

        if ($update_query_run) {
            $_SESSION['status'] = "DATA UPDATED SUCCESSFULLY";
            $_SESSION['status_code'] = "success";
            header('location: index.php');
        } else {
            $_SESSION['status'] = "DATA NOT UPDATED SUCCESSFULLY";
            $_SESSION['status_code'] = "error";
        }

        // Redirect to the index page
        header('location: index.php');
    }
    // Close the connection
    mysqli_close($connection);
}
