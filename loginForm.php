<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alessandro Corrá / ADMIN LOGIN</title>
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<!--===================================================== NAVBAR-->
    <nav id="navDefault" class="navbar">
        <img class="logo" src="img/MyLogo.png">
        <a class="home active" href="index.html">HOME</a>
    </nav>
<!--===================================================== ADD FORM-->
    <div class="admin-form-container">
        <div class="admin-form">

            <div class="login-form-header">
                <h1 class="form-title">LOGIN</h1>
            </div>

            <form method = "POST" action="loginComand.php">
                USERNAME <input type = "text" name = "username" required>
                <br>
                <br>
                PASSWORD <input type = "password" name = "password" required>
                <br>
                <br>
                <input type = "submit" value="Go admin, go!">
            </form>
        </div>
    </div>

</body>
</html>