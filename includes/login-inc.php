<?php


if (isset($_POST['submit'])) {

  require 'database.php';

$username = $_POST['username'];
$password = $_POST['password'];


    
if (isset($_SESSION['sessionId'])){

    // Assume you've collected the username and password from a form
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Hardcoded username and password for demonstration purposes
    $correct_username = 'username';
    $correct_password = 'password';
    
    // Check if the credentials are correct
    if ($username === $correct_username && $password === $correct_password) {
        // Store user information in the session
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        
        // Display the success message
        echo "Login successful! Welcome, " . htmlspecialchars($username) . ".";
    } else {
        // If login fails
        echo "Login failed. Please check your username and password.";
        }
    }



if (empty($username) || empty($password)){
    header("Location: ../login.php?error=emptyfields");
    exit();
} else{
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../login.php?error=sqlerror");
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($result)) {
            $passCheck = password_verify($password, $row['password']);
            if ($passCheck == false)  {
                echo "Home";
                header("Location: ../login.php?error=wrongpass");
                exit();
            } elseif ($passCheck == true) {
                session_start();
                $_SESSION['sessionId'] = $row['id'];
                $_SESSION['sessionUser'] = $row['username'];
                header("Location: ../index.php?success=loggedin");
                exit();
            } else {
                header("Location: ../login.php?error=wrongpass");
                exit();
            }
        } else{
            header("Location: ../login.php?error=nouser");
            exit();
        }
    }
}


} else{
    header("Location: ../index.php?error=accessforbidden");
    exit();

}

?>