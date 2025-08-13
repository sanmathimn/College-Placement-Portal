<?php
session_start();
include_once 'includes/db.inc.php';

if(isset($_POST['login'])) {
    // Get input and escape for safety
    $uname = mysqli_real_escape_string($conn, $_POST['uname']);
    $pwd = $_POST['pwd1']; // We'll verify hashed password later

    // Query admin table
    $sql = "SELECT * FROM adminlogin WHERE uname = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $uname);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($result)) {
        // Verify password assuming it's hashed
        if(password_verify($pwd, $row['pwd'])) {
            $_SESSION['username'] = $row['uname'];
            header("Location: admin/index.php");
            exit();
        } else {
            $login_error = "Incorrect password.";
        }
    } else {
        // Try student table if no admin found
        $sql2 = "SELECT * FROM studentlogin WHERE uname = ?";
        $stmt2 = mysqli_prepare($conn, $sql2);
        mysqli_stmt_bind_param($stmt2, "s", $uname);
        mysqli_stmt_execute($stmt2);
        $result2 = mysqli_stmt_get_result($stmt2);

        if($row2 = mysqli_fetch_assoc($result2)) {
            if(password_verify($pwd, $row2['pwd'])) {
                $_SESSION['username'] = $row2['fname'];
                header("Location: student/index.php");
                exit();
            } else {
                $login_error = "Incorrect password.";
            }
        } else {
            $login_error = "Username does not exist.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css" />
    <?php include_once 'includes/head.php' ?>
</head>
<body>
    <!-- Your images and nav here -->
    <?php include_once 'includes/nav.php' ?>
    
    <div class="content" style="margin-top: 100px; margin-left: 10px;">
        <h1 style="margin-left: 70px;">Sign in to your Account</h1> <br>

        <?php if(!empty($login_error)) { ?>
        <div class="alert alert-danger" style="margin-left:58px; width: 300px;">
            <?php echo htmlspecialchars($login_error); ?>
        </div>
        <?php } ?>

        <form action="login.php" method="POST" autocomplete="off" class="needs-validation" novalidate>
            <input type="text" style="display:none;" autocomplete="off" />
            <div class="form-group">
                <label for="uname">Username</label>
                <input type="text" class="form-control" id="uname" name="uname" style="width: 250px;" required>
                <div class="invalid-feedback">Please enter username.</div>
            </div>
            <div class="form-group">
                <label for="pwd1">Password</label>
                <input type="password" class="form-control" id="pwd1" name="pwd1" style="width: 250px;" required>
                <div class="invalid-feedback">Please enter password.</div>
            </div>
            <button type="submit" name="login" class="btn" style="width: 250px; color: white; font-weight: bold; background: linear-gradient(to left, #2F07FF, #0987FF);">Login</button>
            <div class="form-group">
                <a href="forgot.php" class="btn text-dark" style="margin-left: 30px;">Forgot Password?</a>
            </div>
            <div class="form-group">
                <a href="register.php" class="btn btn-light btn-sm"><u>Don't have an account? Sign Up!</u></a>
            </div>
        </form>
    </div>

    <?php include_once 'includes/footer.php' ?>

    <script>
        // Bootstrap validation code here
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if(form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
</body>
</html>
