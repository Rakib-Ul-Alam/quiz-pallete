<?php
// only ajax calls allowed
if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) || strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
    exit();
}
$requirePath = __DIR__ . '/../../db.php';
require __DIR__."/../../vendor/autoload.php";
header('Content-Type: application/json');
require_once $requirePath; // provides $db
$db->where('category_id', $_POST['cat_id']);
$classes = $db->get('classes', null, 'id, name');
array_unshift($classes, ['id' => -1, 'name' => 'Select Class']); // add all class()
echo json_encode(['data' => $classes]);
?>