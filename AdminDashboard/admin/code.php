<?php
session_start();

$connection = mysqli_connect("localhost", "root", "1234", "login");

if (isset($_POST['save_btn'])) {
    // Retrieve form data
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Prepare the SQL query with placeholders
    $insert_query = $connection->prepare("INSERT INTO users(firstName, lastName, email, password, role) VALUES (?, ?, ?, ?, ?)");

    // Bind parameters to the query
    $insert_query->bind_param("sssss", $firstName, $lastName, $email, $password, $role);

    // Execute the prepared statement
    $insert_query_run = $insert_query->execute();

    // Check if data was inserted successfully
    if ($insert_query_run) {
        $_SESSION['status'] = "DATA INSERTED SUCCESSFULLY";
        $_SESSION['status_code'] = "success";
        header('location: index.php');
    } else {
        $_SESSION['status'] = "DATA NOT INSERTED SUCCESSFULLY";
        $_SESSION['status_code'] = "error";
        header('location: insert.php');
    }

    // Close the prepared statement
    $insert_query->close();


    // Close the connection
    mysqli_close($connection);
}
