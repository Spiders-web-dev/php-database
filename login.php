<?php





?>

<!DOCTYPE html>
<html lang=>
<head>

    <title>Login</title>
</head>
<body>

    <form action="validation.php" method="post">
    <div style="font-size: 20px;margin:1px;">Login Page</div>
    <br>
    <label for="username">Username</label>
    <input type="text" name="username" placeholder="Enter username"required id="username">

    
    <br><br>
    <label for="password">Password</label>
    <input type="password" name="password" placeholder="Enter password"required id="password">
    <br><br>

    <input type="submit" value="Login">
    <br><br>

    <a href="registration.php">Click to Singup</a>
    </form>

</body>
</html>