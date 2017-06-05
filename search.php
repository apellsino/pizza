<?php
define("DB_SERVER", "localhost");
define("DB_USER", "u176567430_ann");
define("DB_PASS", "24041997");
define("DB_NAME", "u176567430_web");

$myConnection=mysqli_connect(DB_SERVER,DB_USER, DB_PASS)//параметры в скобках ("хост", "имя пользователя", "пароль")
or die("<p>Ошибка подключения к базе данных! </p>");/*или вывести ошибку*/
mysqli_select_db($myConnection, DB_NAME)//параметр в скобках ("имя базы, с которой соединяемся")
or die("<p>Ошибка выбора базы данных! </p>");/*или вывести ошибку*/

if(isset($_POST["submit"])){
    if(!empty($_POST['pizza_name'])) {
        $pizza_name=htmlspecialchars($_POST['pizza_name']);
        $query=mysqli_query($myConnection, "SELECT pizza_id FROM pizza WHERE pizza_name='".$pizza_name."'");
        while($row = $query->fetch_assoc())
        {
            if($a=$row['pizza_id'])
            {
                header("Location: single$a.html");
            }
        }
    } else {
        header("Location: index.html");
    }
}
?>
