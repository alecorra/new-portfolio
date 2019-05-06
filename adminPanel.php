<?php require('dbPic.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alessandro Corrá / About me</title>
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<!--===================================================== NAVBAR-->
    <nav id="aboutMeNav" class="navbar">
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
<!--===================================================== ADMIN PANEL-->
    <div class="admin-container">
        <div class="admin-project-container">
            <?php
            if (!empty($result)) {
                foreach ($result as $img) {
                    echo '<a href="' . $img['url'] . '"><img class="admin-project-link" src="' . $img['project_pic'] . '"></a>';
                    echo '<div class="buttons">';
                    echo '<a class="admin-edit" href="editForm.php?id=' . $img['id'] . '">EDIT</a>';
                    echo '<a class="admin-delete" href="deleteComand.php?id=' . $img['id'] . '">DELETE</a>';
                    echo '</div>';
                }
            } else {
                echo '<p>Oops! Something went wrong. This page didn\'t load properly</p>';
            }
            ?>
        </div>
    </div>

</body>
</html>