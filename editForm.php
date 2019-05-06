<?php require 'editFetchComand.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alessandro Corrá / ADMIN EDIT FORM</title>
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
<!--===================================================== EDIT FORM-->
    <div class="admin-form-container">
        <div class="admin-form">

            <div class="edit-form-header">
                <h1 class="form-title">Edit Form</h1>
            </div>

            <form method="POST" action="editUpdateComand.php">
                <?php echo '<input type="hidden" name="id" value="' .  $id . '">';?>
                <br>
                <br>
                <label>Project Pic</label>
                <input type="text" name="project_pic" value="<?php echo $result['project_pic']; ?>">
                <br>
                <br>
                <label>Url</label>
                <input type="text" name="url" value="<?php echo $result['url']; ?>">
                <br>
                <br>
                <input type="submit" value="Edit">
            </form>
        </div>
    </div>

</body>
</html>