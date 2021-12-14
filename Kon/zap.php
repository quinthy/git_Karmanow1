<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>SELECT</title>
    <style>
        td:nth-child(5),td:nth-child(6){text-align:center;}
        table{border-spacing: 0;border-collapse: collapse;}
        td, th{padding: 10px;border: 1px solid black;}
    </style>
</head>
<body>
<?php
require_once 'connect.php';
?>
<?php

try {
    // Открываем соединение, указываем адрес сервера, имя бд, имя пользователя и пароль,
    // также сообщаем серверу в какой кодировке должны вводится данные в таблицу бд.
    $db = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_password,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    // Устанавливаем атрибут сообщений об ошибках (выбрасывать исключения)
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Запрос на вывод записей из таблицы
    $sql = "SELECT fam, ima, otch, klichka, priz FROM kon";
    // Подготовка запроса
    $statement = $db->prepare($sql);
    // Выполняем запрос
    $statement->execute();
    // Получаем массив строк 
    $result_array = $statement->fetchAll();

    echo "<table><tr><th>fam</th><th>ima</th><th>otch</th><th>klichka</th><th>priz</th></tr>";
    foreach ($result_array as $result_row) {
        echo "<tr>";
        echo "<td>" . $result_row["fam"]  . "</td>";
        echo "<td>" . $result_row["ima"]    . "</td>";
        echo "<td>" . $result_row["otch"]   . "</td>";
        echo "<td>" . $result_row["klichka"]    . "</td>";
        echo "<td>" . $result_row["priz"] . "</td>";
        echo "</tr>";
    }
    echo "</table>"; 
}

catch(PDOException $e) {
    echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
}
 
// Закрываем соединение
$db = null;
?> 
</body>
</html>