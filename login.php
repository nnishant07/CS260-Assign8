<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <center>
        <br><br>
        <h2>Login</h2>
        <br><br>
        <form name="login" action="chk_login.php" method="post">
            <div>
                <div>
                    <label>Email:</label>
                    <input type="text" name="email" value="" required/>    
                </div>
                <br>
                <div>
                    <label>Password:</label>
                    <input type="password" name="password" value="" required/>    
                </div>
                <br>
                <div>
                    <input type="submit">
                </div>
            </div>
        </form>
        <br><br>
        <h1>
            <a href="reg.php">Register</a>
        </h1>
    </center>
</body>
</html>