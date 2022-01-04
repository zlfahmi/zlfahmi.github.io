<?php
    require_once ("dbConfig.php");

    $username = $password ="";

    if($_SERVER["REQUEST_METHOD"] == "POST") { 
        session_start();

        $username = trim($_POST["username"]);
        $password = md5(trim($_POST["password"]));

        $sql = "SELECT userlevel FROM users WHERE username = '$username' AND userpassword = '$password'";

        $result = mysqli_query($link,$sql);
        if (!$result)
           die("Database access failed: " . mysqli_error);

        /*if (!$result) {
            trigger_error('Invalid query: ' . $link->error);
        }*/
        
        $rows = mysqli_num_rows($result);
        if ($rows) {
            $row = mysqli_fetch_array($result);
            $_SESSION['loggedin'] = true;
            $_SESSION['userlevel'] = $row['userlevel'];
            header("location: index.php");
        } else {
            echo "<script>alert('Ooops! Wrong username & password');</script>";
        }
        mysqli_close($link);
    }
    
   
?>
<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel ="stylesheet" href="css/boostrap.css">
        <style type="text/css">
            body {
                font-size: 14px;
                font-family: sans-serif;
            }
            .warpper {
                width: 35px;
                padding: 20px;
            }
        </style>
    </head>
    <body>

        <div class="wrapper">
            <h2>Login Page</h2>
            <p>Please fill this form to login an account</p>
            <form action="<?php echo htmlspecialchars($_SERVER["php_self"]);?>" method="POST">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <label>Password</label>
                <input type="text" name="password" class="form-control" value="<?php echo $password; ?>">
                <br><br>
                <div class="form-group">
                    <input type="submit"class="btn btn-primary" value="Submit">
                    <input type="reset" class="btn btn-default" value="Reset">
                </div>
            </form>
            <p>Don't have an account ? <a href ="register.php">Register Here</a>.</p>
        </div>
    </body>
</html>