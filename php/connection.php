<?php
// Константы базы данных
define("DB_SERVER", "localhost");
define("DB_USER", "u176567430_ann");
define("DB_PASS", "24041997");
define("DB_NAME", "u176567430_web");

$myConnection=mysqli_connect(DB_SERVER,DB_USER, DB_PASS)//параметры в скобках ("хост", "имя пользователя", "пароль")
or die("<p>Ошибка подключения к базе данных! </p>");/*или вывести ошибку*/

mysqli_select_db($myConnection, DB_NAME)//параметр в скобках ("имя базы, с которой соединяемся")
or die("<p>Ошибка выбора базы данных! </p>");/*или вывести ошибку*/
?>