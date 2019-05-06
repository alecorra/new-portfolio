<?php

require 'functions.php';


$db = new PDO('mysql:host=192.168.20.20;dbname=portfolioProject', 'root', '');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$sql = "UPDATE `portfolio` SET `project_pic` = :project_pic, `url` = :url WHERE `id` = :id;";

$sqlCheck = "SELECT `id` FROM `portfolio`;";

$checkQuery = $db->query($sqlCheck);
$checkResult = $checkQuery->fetchAll();

$array = array('id'=>$_POST['id']);

$check = in_array($array, $checkResult);

if ($check) {
    $projectPic = $_POST['project_pic'];
    $url = $_POST['url'];
    $id = $_POST['id'];
    $query = $db->prepare($sql);
    $query->bindParam(':project_pic', $projectPic, PDO::PARAM_STR);
    $query->bindParam(':url', $url, PDO::PARAM_STR);
    $query->bindParam(':id', $id, PDO::PARAM_STR);
    $result = $query->execute();
    if ($result) {
        echo 'UPDATE SUCCESS!';
        echo '<br>';
        echo '<br>';
        echo '<a class="admin-edit" href="adminPanel.php">ADMIN PANEL</a>';
        echo '<br>';
        echo '<br>';
        echo '<a class="admin-edit" href="index.html">HOME</a>';
    } else {
        echo errorMsg();
    }
} else {
    echo errorMsg();
    echo '<br>';
    echo '<br>';
    echo '<a class="admin-edit" href="adminPanel.php">ADMIN PANEL</a>';
}