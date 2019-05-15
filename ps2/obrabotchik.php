<?php
$connect = mysqli_connect(HOST,USER,PASSWORD,DB);
if(!$connect) exit('Ошибка подключения к БД');

// C какой статьи будет осуществляться вывод
$startFrom = $_POST['startFrom'];

// Получаем 10 статей, начиная с последней отображенной
$res = mysqli_query($connect, "SELECT * FROM `news` ORDER BY `id` DESC LIMIT {$startFrom}, 10");

// Формируем массив со статьями
$articles = array();
while ($row = mysqli_fetch_assoc($res))
{
    $articles[] = $row;
}

// Превращаем массив статей в json-строку для передачи через Ajax-запрос
echo json_encode($articles);
?>