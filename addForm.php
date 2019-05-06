<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alessandro Corrá / ADMIN ADD FORM</title>
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<!--===================================================== NAVBAR-->
<nav id="navDefault" class="navbar">
    <img class="logo" src="img/MyLogo.png">
    <a class="home" href="index.html">HOME</a>
    <a class="portfolio" href="portfolio.php">PORTFOLIO</a>
    <a class="add active" href="adminPanel.php">ADMIN PANEL</a>
</nav>
<!--===================================================== ADD FORM-->
    <div class="admin-form-container">
        <div class="admin-form">
            <div class="add-form-header">
                <h1 class="form-title">Add Form</h1>
            </div>

            <form method="post" action="addComand.php">
                <br>
                <br>
                <label>Project Pic</label>
                <input type="text" name="project_pic" required>
                <br>
                <br>
                <label>Url</label>
                <input type="text" name="url" required>
                <br>
                <br>
                <input type="submit" value="Add to database">
            </form>
        </div>
    </div>


</body>
</html>