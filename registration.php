<!DOCTYPE>
<html lang="ru">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width"/>
		<title>HealthyTeeth</title>
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/doctors.css" />
		<link rel="stylesheet" href="css/home.css" />
		<link rel="stylesheet" href="css/form1.css" />
		<link rel="stylesheet" href="css/callback.css" />
		<link rel="stylesheet" href="css/signin.css" />
		<link rel="stylesheet" href="css/registration.css" />
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="font-awesome-4.2.0/css/font-awesome.min.css" />

		<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
	<body>
	<header class="Header">
		<div class="container">
			<div class="HeaderWrapper">
				<a href="index.php">
					<div class="Logo">
					<div class="Logo-img"><img src="img/logo.jpg" height="50" width="48"></div>
					<div class="Logo-name">HealthyTeeth</div>
					</div>
				</a>
				<div class="Nav">
					<ul>
						<li><a href="index.php">О нас</a></li>
						<li><a href="doctors.php">Врачи</a></li>
						<li><a href="reviews.php">Отзывы</a></li>
						<li><a href="registration.php">Регистрация</a></li>
						<li><a onclick="show('block')"><i class="fa fa-user" aria-hidden="true"></i></a>
						<div onclick="show('none')" id="wrap"></div>
			<div id="window">
			<img class="close" onclick="show('none')" src="img/close.png" height="30" width="30">
				<form id="backSignIn" name="backSignIn">
			<div class="signin_main">
				<input name="email" type="Email" id="EmailForm" maxlength="20" placeholder="Введите e-mail" required="required" />
				<input name="telephone" type="Tel" id="telForm" maxlength="20" placeholder="Введите пароль" required="required" />
			</div>
				<button id="telButton" type="submit" form="backPhone">Войти</button>
				</form>	
			</div>
						<script type="text/javascript">
			function show(state){

					document.getElementById('window').style.display = state;			
					document.getElementById('wrap').style.display = state; 			
			}
			
		</script>
</li>
					</ul>
				</div>
			</div>
		</div>
			<section class="Infotmation">
			<div class="container">
				<div class="HomeInfotmation-wrapper">
					<div class="HomeInfotmation-contacts">
						<div class="HomeInfotmation-contact">
							<i class="fa fa-phone" aria-hidden="true"></i>
							<div class="phones">
								<span>+380992374526</span>
								<span>+380972372428</span>
							</div>
						</div>
						<div class="HomeInfotmation-contact">
							<i class="fa fa-envelope-o" aria-hidden="true"></i>
							<div class="email">
								<span>healthyteeeth@gmail.com</span>
							</div>
						</div>
					</div>
					<div class="HomeInfotmation-socials">
						<a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
						<a href=""><i class="fa fa-tumblr-square" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
			</section>
	</header>
	<section class="Form_of_registration">
		<h2>Регистрация</h2>
		<form class="Registration" method="POST" action="registration2.php" id="registration-form">
			<div class="col">
				<p>Ваше имя</p>
				<input required type="text" name="name_registration" id="name_registration" value="" size="25" placeholder="Введите имя" />
			</div>
			<div class="col">
				<p>Ваша фамилия</p>
				<input required type="text" name="second_name" id="second_name" size="25" placeholder="Введите фамилию" />
			</div>
			<div class="col">
				<p>Телефон</p>
				<input required type="number" name="phone" id="phone" size="25" placeholder="Введите телефон" />
			</div>
			<div class="col">
				<p>E-mail</p>
				<input required type="email" name="mail" id="mail" size="25" placeholder="Введите почту" />
			</div>
			<div class="but">
				<button type="submit" form="registration-form" value="Submit">Зарегистрироваться</button>
			</div>
		</form>
	</section>
	<section class="Form_of_visitation">
		<div class="Form_of_visitation_title">
			<div>
				<h2>Запишитесь на прием прямо сейчас</h2>
				<p>Какой-то текст, описывает какая классная у нас клиника, много качественных услуг она предлагает, и еще много много всего</p>
			</div>
		</div>
		<form method="POST" action="index2.php" id="feedback-form">
			<input required type="text" name="name" id="name" size="25" placeholder="Введите имя" />
			<input required type="text" name="second_name" id="second_name" size="25" placeholder="Ведите фамилию" /><br>
			<input required type="number" name="phone" id="phone" size="25" placeholder="Введите телефон" />
			<input required type="email" name="mail" id="mail" size="25" placeholder="Ведите почту" /><br>

			<select name="type_of_visitation">
				<option selected="selected">Тип посещения</option>
				<option >Снимок</option>
				<option >Хирургия</option>
				<option>Осмотр</option>
			</select>
			<select name="type_of_doctor" >
				<option selected="selected">Выбор врача</option>
				<option >Синенко А.Л.</option>
				<option >Марченко С.Н</option>
				<option>Кириенко Р.Т.</option>
			</select><br>
			<input type="date" name="date" id="date" min="2017-12-17"><br>
			<button type="submit" form="feedback-form" value="Submit">Записаться</button>
		</form>
	</section>
	<button class="callback"><a id="popup__toggle"><img src="img/phone.png" width="90px" height="90px"></a></button>
	<!--[if lt IE 9]><div class="popup__overlay popup__overlay_ie"></div><![endif]-->
<div class="popup__overlay">
    <div class="popup">
	<img class="close" onclick="show('none')" src="img/close.png" height="30" width="30">
        <form method="POST" action="callback2.php" id="backPhone" name="backPhone">
		   <div class="callback_main">
		   <input required name="name" type="name" id="NameForm" maxlength="20" placeholder="Введите Ваше имя" />
           <input required name="phone" type="number" id="telForm" maxlength="20" placeholder="Введите Ваш телефон"/>
		   </div>
           <button id="telButton" type="submit" form="backPhone">Подтвердить</button>
        </form>
    </div>
    <!--[if lt IE 9]><div class="popup__valignfix"></div><![endif]-->
</div>
<!--Сорри, тут будет косо лежать скрипт, потому с внешней ссылки он читаться не хочет :( простите и не бейте ногами-->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">
$(window).ready(function(){
p = $('.popup__overlay')
$('#popup__toggle').click(function() {
    p.css('display', 'block')
})
p.click(function(event) {
    e = event || window.event
    if (e.target == this) {
        $(p).css('display', 'none')
    }
})
$('.close').click(function() {
    p.css('display', 'none')
})
});
</script>
	<script src="js/common.js"></script>	
	</body>
</html>