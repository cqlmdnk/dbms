<!DOCTYPE html>
<html lang="en">

<head>
<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    ?>
    <title>Registration</title>

</head>


<body>
    <div class="container">
        <div class="header">
            <h2>Register</h2>
        </div>
        <form action="Business/register_user.php" method="post">

            <div>
                <label for="username"> Username </label>
                <input type="text" name="username" required>
            </div>

            <div>
                <label for="email"> Email </label>
                <input type="email" name="email" required>
            </div>

            <div>
                <label for="password"> Password </label>
                <input type="text" name="password1" required>
            </div>

            <div>
                <label for="username"> Password </label>
                <input type="text" name="password2" required>
            </div>

            <button type="submit" name="register">Register </button>

        </form>
        <?php 
            session_start();
            if (isset($_SESSION['message'])) {
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            }
        ?>
    </div>







</body>





</html>