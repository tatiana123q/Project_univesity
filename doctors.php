
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
						<li><a href="personal_area.php"><i class="fa fa-user" aria-hidden="true"></i>
</a></li>
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
				<div class="Infotmation-title">
					<span>Стоматологическая клиника heathyteath</span>
				</div>
				<div class="HomeInfotmation-way_to_form">
					<a href="#form1"><button>записаться</button></a>
				</div>
			</div>
			</section>
	</header>
	<section class="Our_doctors">
		<h1> Наши врачи</h1>
		<section class="doctors">
			<div class="doctor">
				<img src="img/vrach1.jpg" alt="альтернативный текст" height="340" width="240" />
				<h4>Петрова Василина Генадьевна</h4>
				<p>Врач професор высшей категории, и много всего бла бла текст</p>
			</div>
			<div class="doctor">
				<img src="img/vrach2.jpg" alt="альтернативный текст"  height="340" width="240" />
				<h4>Петрова Василина Генадьевна</h4>
				<p>Врач професор высшей категории</p>
			</div>
			<div class="doctor">
				<img src="img/vrach3.jpg" alt="альтернативный текст"  height="340" width="240"  />
				<h4>Петрова Василина Генадьевна</h4>
				<p>Врач професор высшей категории</p>
			</div>
			<div class="doctor">
				<img src="img/vrach4.jpeg" alt="альтернативный текст"  height="340" width="240" />
				<h4>Петрова Василина Генадьевна</h4>
				<p>Врач професор высшей категории</p>
			</div>
			<div class="doctor">
				<img src="img/vrach5.jpeg" alt="альтернативный текст" height="340" width="240" />
				<h4>Петрова Василина Генадьевна</h4>
				<p>Врач професор высшей категории</p>
			</div>
			<div class="doctor">
				<img src="img/vrach6.jpg" alt="альтернативный текст" height="340" width="240" />
				<h4>Петрова Василина Генадьевна</h4>
				<p>Врач професор высшей категории</p>
			</div>
		</section>
	</section>
<section class="Form_of_visitation">
<p><a id="form1"></a></p>
		<div class="Form_of_visitation_title">
			<div>
				<h2>Запишитесь на прием прямо сейчас</h2>
				<p>Какой-то текст, описывает какая классная у нас клиника, много качественных услуг она предлагает, и еще много много всего</p>
			</div>
		</div>
		<form method="POST" action="index2.php" id="feedback-form">
			<input type="text" name="name" id="name" size="25" placeholder="Введите имя" />
			<input type="text" name="second_name" id="second_name" size="25" placeholder="Ведите фамилию" /><br>
			<input type="tel" name="phone" id="phone" size="25" placeholder="Введите телефон" />
			<input type="email" name="mail" id="mail" size="25" placeholder="Ведите почту" /><br>

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
	<button class="callback"><img src="img/phone.png" width="90px" height="90px"></button>
	<script src="js/common.js"></script>	
	</body>
</html>