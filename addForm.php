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
        <a class="about-me active" href="aboutMe.html">ABOUT ME</a>
        <a class="portfolio" href="portfolio.php">PORTFOLIO</a>
        <a class="contacts" href="#">CONTACTS</a>
        <div class="nav-icons">
            <a href="https://github.com/alecorra" target="_blank">
                <i class="fa fa-github-square"> </i>
            </a>
            <a href="https://www.linkedin.com/in/alessandro-corr%C3%A1-ab4a45156/" target="_blank">
                <i class="fa fa-linkedin-square"> </i>
            </a>
        </div>
        <a class="small-text-links" href="#">Alessandro Corrá 2019</a>
    </nav>
<!--===================================================== ADD FORM-->
    <div>
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

</body>
</html>