<?php
session_start();
?>

<?php
define("DB_SERVER", "localhost");
define("DB_USER", "u176567430_ann");
define("DB_PASS", "24041997");
define("DB_NAME", "u176567430_web");

$myConnection=mysqli_connect(DB_SERVER,DB_USER, DB_PASS)//параметры в скобках ("хост", "имя пользователя", "пароль")
or die("<p>Ошибка подключения к базе данных! </p>");/*или вывести ошибку*/
mysqli_select_db($myConnection, DB_NAME)//параметр в скобках ("имя базы, с которой соединяемся")
or die("<p>Ошибка выбора базы данных! </p>");/*или вывести ошибку*/

if(isset($_POST["login"])){
    if(!empty($_POST['Email']) && !empty($_POST['Password'])) {
        $Email=htmlspecialchars($_POST['Email']);
        $password=htmlspecialchars($_POST['Password']);
        $query =mysqli_query($myConnection, "SELECT Email,password FROM users WHERE Email='".$Email."' AND Password='".$password."'");
        $numrows=mysqli_num_rows($query);
        if($numrows!=0)
        {
            while($row=mysqli_fetch_assoc($query))
            {
                $dbemail=$row['Email'];
                $dbpassword=$row['Password'];
                if($Email = $dbemail && $password = $dbpassword)
                {
                    // старое место расположения
                    //  session_start();
                    $_SESSION['session_Email']=$Email;
                    /* Перенаправление браузера */
                    header("Location: /web/index.html");
                }

            }
            echo "afterif";

        } else {
            //  $message = "Invalid username or password!";

            echo  "Invalid username or password!";
        }
    } else {
        $message = "All fields are required!";
    }
}
?>