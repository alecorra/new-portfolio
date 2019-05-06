<?php

$db = new PDO('mysql:host=192.168.20.20;dbname=portfolioProject', 'root', '');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$sql = 'SELECT `project_pic`, `url` FROM `portfolio` WHERE `id` = ?;';

if (!empty($_GET['id']) && (is_numeric($_GET['id']))) {
    $id = $_GET['id'];
    $query = $db->prepare($sql);
    $query->execute([$id]);
    $result = $query->fetch();
} else {
    header('location: adminPanel.php');
}

