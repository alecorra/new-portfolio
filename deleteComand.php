<?php

require 'functions.php';

$db = new PDO('mysql:host=192.168.20.20;dbname=portfolioProject', 'root', '');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$sql = "UPDATE `portfolio` SET `on_to` = 0 WHERE `id` = :id;";

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $query = $db->prepare($sql);
    $query->bindParam(':id', $id, PDO::PARAM_STR);
    $result = $query->execute();
    if ($result) {
        echo 'SUCCESS - file removed from portfolio';
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
    {
        echo errorMsg();
        echo '<br>';
        echo '<br>';
        echo '<a class="admin-edit" href="adminPanel.php">ADMIN PANEL</a>';
    }
}