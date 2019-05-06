<?php

$db = new PDO('mysql:host=192.168.20.20;dbname=portfolioProject', 'root', '');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$sql = 'SELECT `id`, `project_pic`, `url` FROM `portfolio` WHERE `on_to` = \'1\';';
$query = $db->query($sql);
$result = $query->fetchAll();