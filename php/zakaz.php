<!DOCTYPE html>
<html>
<body>
<?php
define("DB_SERVER", "localhost");
define("DB_USER", "u176567430_ann");
define("DB_PASS", "24041997");
define("DB_NAME", "u176567430_web");

$myConnection=mysqli_connect(DB_SERVER,DB_USER, DB_PASS)//параметры в скобках ("хост", "имя пользователя", "пароль")
or die("<p>Ошибка подключения к базе данных! </p>");/*или вывести ошибку*/
mysqli_select_db($myConnection, DB_NAME)//параметр в скобках ("имя базы, с которой соединяемся")
or die("<p>Ошибка выбора базы данных! </p>");/*или вывести ошибку*/
$_SESSION['click']=0;

if(isset($_POST["submit"])) {
    $_SESSION['click']++;
    if (!empty($_POST['id'])) {
        $id = htmlspecialchars($_POST['id']);
        $query = mysqli_query($myConnection, "SELECT * FROM pizza WHERE pizza_id='" . $id . "'");
        $numrows = mysqli_num_rows($query);
        if ($numrows !== 0) {
            while ($row = mysqli_fetch_assoc($query)) {
                $Pizza_id = $row['pizza_id'];
                $Pizza_name = $row['pizza_name'];
                $Price = $row['price'];
                $Weight = $row['weight'];
                $Ingridients = $row['ingridients'];
                $Img = $row['image'];
            }
        }
    }
    $pizza_id = $Pizza_id;
    $pizza_name = $Pizza_name;
    $price = $Price;
    $weight = $Weight;
    $ingridients = $Ingridients;
    $img = $Img;

    ?>
        <ul class="cart-header">
            <div class="close1"> </div>
            <li class="ring-in"><a href="../single<?php echo $pizza_id;?>.html" ><img src=<?php echo $img;?> class="img-responsive" alt=""></a>
            </li>
            <li><span class="name" name="tovar"><?php echo $pizza_name;?></span></li>
            <li><span class="cost"><?php echo $price; ?></span></li>
            <li><span>Вес: <?php echo $weight; ?></span>
                <p>Ингредиенты: <?php echo $ingridients; ?></p></li>
            <div class="clearfix"> </div>
        </ul>
    <?php }?>
</body>
</html>