<?php

require 'functions.php';

$db = new PDO('mysql:host=192.168.20.20;dbname=portfolioProject', 'root', '');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$sql = "INSERT INTO `portfolio` (`project_pic`, `url`, `on_to`) VALUES (:project_pic, :url, 1);";

if (!empty($_POST['project_pic']) && (!empty($_POST['url']))) {
    $projectPic = $_POST['project_pic'];
    $url = $_POST['url'];
    $query = $db->prepare($sql);
    $query->bindParam(':project_pic', $projectPic, PDO::PARAM_STR);
    $query->bindParam(':url', $url, PDO::PARAM_STR);
    $result = $query->execute();
    if ($result) {
        header('location: adminPanel.php');
    } else {
        echo errorMsg();
    };
} else {
    echo errorMsg();
}
