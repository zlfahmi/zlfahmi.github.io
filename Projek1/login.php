<?php
// Include config file
require_once("dbConfig.php");

// Define variables and intialize with empty values
$username = $password = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start(); //start a session
    // Validate username
    $username = trim($_POST["username"]);
    $password = md5(trim($_POST["password"]));
    // Prepare a select statement
    $sql = "SELECT userlevel FROM users WHERE username = '$username'
            and userpassword = '$password' ";
    
        $result = mysqli_query($link,$sql); //execute SQL statement
        if(!$result)
            die("Database access failed: " . mysqli_error);
    
        // get number of rows returned
        $rows = mysqli_num_rows($result);
        if ($rows){ //correct username & password
            $row = mysqli_fetch_array($result);
            $_SESSION['loggedin'] = true;
            $_SESSION['userlevel'] = $row['userlevel'];
            header("location: index.php");
        } else {
            echo "<script> alert('Oops! Wrong Username & Password'); </script>";
        }
    // Close statement
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign In</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 35@px; padding: 2@px; }
    </style>
</head>
<body>
    <?php $confirm_password=""; $confirm_password_err=""; $username_err="";
        $password_err=""; $username=""; ?>
    <div class="wrapper">
        <h2>Login Page</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?> ">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
            </div>
            
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?> ">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
            </div>
            
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
        </form>
        <p>Don't have an account? <a href="register.php">Register Here</a>.</p>
    </div>
</body>
</html>