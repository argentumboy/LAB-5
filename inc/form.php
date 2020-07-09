<?php
/*
* Скрипт реализующий по нажатию кнопки submit передачу данных с
формы в базу данных
* */
// подключение класса BD реализующего взаимодействие с базой данных

include_once "bd.php";
//создание экземпляра класса BD
// Проверка, была ли нажата кнопка с именем submit
 if(isset($_POST['submit']))
 {
 // фильтация данных полученных через метод POST
 $name = filter($_POST['name']);
 $email = filter($_POST['email']);
 $text = filter($_POST['text']);
 //Запсь данных в базу данных
 save($name, $email, $text);
 //переход на страницу после записи данных в базу данных
 header("Location: ../Gpage.php?id=gbook");
 }
?>