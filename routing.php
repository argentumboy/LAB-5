<?php
// Получение id страницы с помощью метода GET и фильтрация данных
$id=null;
if (isset($_GET['id'])) {
$id = strtolower(strip_tags(trim($_GET['id'])));
}
//Проверка на содержимое переменной $id
switch($id){
case 'contact': include 'inc/contact.inc.php'; break;
case 'about': include 'inc/about.inc.php'; break;
case 'gbook': include 'inc/gbook.inc.php'; break;
default: include 'inc/Gpage.inc.php';
}
?>