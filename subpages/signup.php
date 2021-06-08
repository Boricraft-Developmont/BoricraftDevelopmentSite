<?php

require_once "../../phpconfig/config.php";
require_once "session.php";

$error = '';
$succes = '';


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

    $fullname = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST["confirm_password"]);
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    if($query = $db->prepare("SELECT * FROM users WHERE email = ?")) {
        $error = '';

    $query->bind_param('s', $email);
    $query->execute();
    $query->store_result();
        if ($query->num_rows > 0) {
            $error .= '<p class="error">The email is already in use!</p>';
        } else {

            //Check if password is longer than 8 characters
            if (strlen($password ) < 8) {
                $error .= '<p class="error"> Password must have atleast 8 characters!</p>';
            }
            
            //Confirm password
            if (empty($confirm_password)) {
                $error .= '<p class="error">You must confirm your password!</p>';
            } else {
                if (empty($error) && ($password != $confirm_password)) {
                    $error .= '<p class="error">Passwords do not match!</p>';
                }
            }

            if (empty($error)) {
                $insertQuery = $db->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?);");
                $insertQuery->bind_param("sss", $fullname, $email, $password_hash);
                $result = $insertQuery->execute();
                if ($result) {
                    $error .= '<p class="succes">Your registration was successful!</p>';
                    $query->close();
                    $insertQuery->close();
                    mysqli_close($db);  
                } else {
                    $error .= '<p class="error">Something went wrong!</p>';
                }
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Boricraft Development | Signup</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Sign up</h2>
                    <p>Please fill this form to create an account</p>
                    <?php echo $succes; ?>
                    <?php echo $error; ?>
                    <form action="" method="POST">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="name" class="form-cotrol" required />
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <label>Confirm password</label>
                            <input type="password" name="confirm_password" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                        </div>
                        <p>Already have an account? <a href="login.php">Login here</a>.</p>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>