<?php
//имя базы данных, к которой будет подключаться
 $dbName = 'lab5' ; 
 /*
 * имя хоста для подлюкчения к БД
 *
 * */
$dbHost = 'localhost' ;
 /*
 *Имя пользователя для подключения к базе данных
 * */
 $dbUsername = 'root';
 /*
 * пароль для подключения к БД*/
 $dbUserPassword = '';
/*
*переменная хранящая соединение с базой данных
* */
 $cont = null;

$cont = new PDO( "mysql:host=".$dbHost.";"."dbname=".$dbName,
$dbUsername, $dbUserPassword);
 /*
 * Функция для сохранения данных в БД
 * $name - имя пользователя, который оставил свой комментарий
 * $email - электронный адрес
 * $text - комментарий
 *
 * */
 function save($name, $email, $text)
 {
 global $cont;
 $sql = $cont->prepare("INSERT INTO lab51 (name, email, text)
values (?, ?, ?)");
 $result = $sql->execute( array($name, $email, $text)
);

 }
 /*
 Функция для фильтрации данных полученных через POST запрос
 $name - переменная для фильтрации данных
 *
 * */
 function filter($name)
 {
 $result = htmlspecialchars( strip_tags( trim($name)));
 return $result;
 }
 /*Функция для получения всех данных из БД
 *

 * */
 function getAll()
 {
global $cont;
$q = $cont->query("SELECT * from lab51");
$result = $q->fetchAll();
return $result;
 }
