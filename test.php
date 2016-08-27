<?php
$conn = new PDO('mysql:host=localhost;port=;dbname=hoopla_sr', 'root', 'admin12', array( PDO::ATTR_PERSISTENT => false, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));

$sql = 'SELECT * from hoopla_sr.brand WHERE id=16';
$stmt = $conn->prepare($sql);
$obj = $stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

$bname = $rows[0]['brand_name'];

$sql = 'SELECT * from hoopla_sr.brand WHERE brand_name = ?';

$stmt = $conn->prepare($sql);
$stmt->bindParam(1, $bname);
$obj = $stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($rows);