<?php
session_start(); // Ensure session starts before anything else
include 'connect.php';


//SignUp
if (isset($_POST['signUp'])) {
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($_POST['password']); // Hash password

    $checkEmail = "SELECT * From users where email='$email'";
    $result = $conn->query($checkEmail);
    if ($result->num_rows > 0) {
        echo "Email Address Already Exists !";
    } else {
        $insertQuery = "INSERT INTO users(firstName,lastName,email,password)
                       VALUES ('$firstName','$lastName','$email','$password')";
        if ($conn->query($insertQuery) == TRUE) {
            $_SESSION['email'] = $email;
            header("Location: http://localhost/website/about.php");
        } else {
            echo "Error:" . $conn->error;
        }
    }
}


//Log In/ Sign In
if (isset($_POST['signIn'])) {

    $_SESSION['auth'] = true;
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($_POST['password']); // Hash password


    $sql = "SELECT * FROM users WHERE email='$email' and password='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc(); // Fetch user data

        // Set session variables
        $_SESSION['email'] = $row['email'];
        $_SESSION['auth'] = true;

        // Role-based access
        if ($row["role"] == "user") {
            header("Location: http://localhost/website/about.php");
        } else if ($row["role"] == "admin") {
            header("Location: http://localhost/website/admindashboard/admin/index.php");
        } else {
            echo "Incorrect Email or Password";
        }
        exit(); // Ensure no further code is executed
    } else {
        echo "Not Found, Incorrect Email or Password"; // User not found
    }
}
