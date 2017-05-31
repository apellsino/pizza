<?php
if    (isset($_POST['Name'])) { $Name = $_POST['Name']; if ($Name == '') { unset($Name);}    } //заносим введенный пользователем логин в переменную $login, если он пустой,    то уничтожаем переменную
if    (isset($Name)) {//если существуют необходимые переменные

    define("DB_SERVER", "localhost");
    define("DB_USER", "u176567430_ann");
    define("DB_PASS", "24041997");
    define("DB_NAME", "u176567430_web");

    $myConnection=mysqli_connect(DB_SERVER,DB_USER, DB_PASS)//параметры в скобках ("хост", "имя пользователя", "пароль")
    or die("<p>Ошибка подключения к базе данных! </p>");/*или вывести ошибку*/

    mysqli_select_db($myConnection, DB_NAME)//параметр в скобках ("имя базы, с которой соединяемся")
    or die("<p>Ошибка выбора базы данных! </p>");/*или вывести ошибку*/

    $result = mysqli_query($myConnection, "SELECT id FROM users WHERE Name='$Name'");//такой ли у пользователя е-мейл
    $myrow = mysqli_fetch_array($result);
    if    ($myrow['id']=0||$myrow['id']='') {
        //если активированного пользователя с таким логином и е-mail    адресом нет
        exit ("Пользователя с    таким e-mail адресом не обнаружено ни в одной базе ЦРУ :) <a    href='../index.html'>Главная страница</a>");
    }
    //если пользователь с таким логином и е-мейлом найден,    то необходимо сгенерировать для него случайный пароль, обновить его в базе и    отправить на е-мейл

    $new_password = mysqli_query($myConnection, "SELECT password FROM users WHERE Name='$Name'");
    $new_password_sh = mysqli_fetch_array($new_password);

    //формируем сообщение


    echo    "<html><head><meta http-equiv='Refresh' content='3;    URL=http://kalchenko.esy.es/web/index.html'></head><body>На Ваш e-mail отправлено письмо с паролем. Вы будете перемещены через 3 сек. Если не хотите ждать, то <a    href='../index.html'>нажмите сюда.</a></body></html>";//перенаправляем    пользователя
}
else    {//если    данные еще не введены
    echo '
<!DOCTYPE html>
<html>
<head>
<title>Luxury Watches A Ecommerce Category Flat Bootstarp Resposive Website Template | Register :: w3layouts</title>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--jQuery(necessary for Bootstrap\'s JavaScript plugins)-->
<script src="../js/jquery-1.11.0.min.js"></script>
<!--Custom Theme files-->
<!--theme-style-->
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Превью" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>	
<!--start-menu-->
<script src="../js/simpleCart.min.js"> </script>
<link href="../css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="../js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<!--dropdown-->
<script src="../js/jquery.easydropdown.js"></script>			
</head>
<body> 
	<!--top-header-->
	<div class="top-header">
		<div class="container">
			<div class="top-header-main">
				<div class="col-md-6 top-header-left">
					<div class="cart box_1">
						<a href="../checkout.html">
							<div class="total">
								<span class="simpleCart_total"></span></div>
								<img src="../images/cart-1.png" alt="" />
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Пустая корзина</a></p>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--top-header-->
	<!--start-logo-->
	<div class="logo">
		<a href="../index.html"><h1>Luxury Watches</h1></a>
	</div>
	<!--start-logo-->
	<!--bottom-header-->
	<div class="header-bottom">
		<div class="container">
			<div class="header">
				<div class="col-md-9 header-left">
				<div class="top-nav">
					<ul class="memenu skyblue"><li class="active"><a href="../index.html">Home</a></li>
						<li class="grid"><a href="../typo.html">Blog</a>
						</li>
						<li class="grid"><a href="../contact.html">Contact</a>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-3 header-right"> 
				<div class="search-bar">
					<input type="text" value="Search" onfocus="this.value = \'\';" onblur="if (this.value == \'\') {this.value = \'Search\';}">
					<input type="submit" value="">
				</div>
			</div>
			<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--bottom-header-->
	<!--start-breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="../index.html">Home</a></li>
					<li class="active">Register</li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->
	<!--register-starts-->
	<div class="register">
		<div class="container">
			<div class="register-top heading">
				<h2>REGISTER</h2>
			</div>
			<form action="#" id="newpasswordform" method="post" name="newpassword">
			<div class="register-main">
					<div class="col-md-6 account-left">

						<input placeholder="Name" type="text" tabindex="1" required name="Name">
					</div>
				<div class="clearfix"></div>
			</div>
			<div class="address submit">
							<input type="submit" value="Submit" name="register">
			</div>
		</div>
	</div>
	<!--register-end-->
	<!--information-starts-->
	<div class="information">
		<div class="container">
			<div class="infor-top">
				<div class="col-md-3 infor-left">
					<h3>Follow Us</h3>
					<ul>
						<li><a href="#"><span class="fb"></span><h6>Facebook</h6></a></li>
						<li><a href="#"><span class="twit"></span><h6>Twitter</h6></a></li>
						<li><a href="#"><span class="google"></span><h6>Google+</h6></a></li>
					</ul>
				</div>
				<div class="col-md-3 infor-left">
					<h3>Information</h3>
					<ul>
						<li><a href="#"><p>Specials</p></a></li>
						<li><a href="#"><p>New Products</p></a></li>
						<li><a href="#"><p>Our Stores</p></a></li>
						<li><a href="../contact.html"><p>Contact Us</p></a></li>
						<li><a href="#"><p>Top Sellers</p></a></li>
					</ul>
				</div>
				<div class="col-md-3 infor-left">
					<h3>My Account</h3>
					<ul>
						<li><a href="../account.html"><p>My Account</p></a></li>
						<li><a href="#"><p>My Credit slips</p></a></li>
						<li><a href="#"><p>My Merchandise returns</p></a></li>
						<li><a href="#"><p>My Personal info</p></a></li>
						<li><a href="#"><p>My Addresses</p></a></li>
					</ul>
				</div>
				<div class="col-md-3 infor-left">
					<h3>Store Information</h3>
					<h4>The company name,
						<span>Lorem ipsum dolor,</span>
						Glasglow Dr 40 Fe 72.</h4>
					<h5>+955 123 4567</h5>	
					<p><a href="mailto:example@email.com">contact@example.com</a></p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--information-end-->
	<!--footer-starts-->
	<div class="footer">
		<div class="container">
			<div class="footer-top">
				<div class="col-md-6 footer-left">
					<form>
						<input type="text" value="Enter Your Email" onfocus="this.value = \'\';" onblur="if (this.value == \'\') {this.value = \'Enter Your Email\';}">
						<input type="submit" value="Subscribe">
					</form>
				</div>
				<div class="col-md-6 footer-right">					
					<p>© 2015 Luxury Watches. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--footer-end-->	
</body>
</html>';
}
?>
