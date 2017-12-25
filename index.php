<!DOCTYPE>
<html lang="ru">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width"/>
		<title>HealthyTeeth</title>
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/home.css" />
		<link rel="stylesheet" href="css/form1.css" />
		<link rel="stylesheet" href="css/callback.css" />
		<link rel="stylesheet" href="css/signin.css" />
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="font-awesome-4.2.0/css/font-awesome.min.css" />

		<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
			
		</script></li>
					</ul>
				</div>
			</div>
		</div>
			<section class="HomeInfotmation">
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
				<div class="HomeInfotmation-title">
					<span>Стоматологическая клиника heathyteeth</span>
				</div>
				<div class="HomeInfotmation-way_to_form">
					<a href="#form1"><button>записаться</button></a>
				</div>
			</div>
			</section>
	</header>
	<section class="HomeServises">
	<div class="container">
		<div class="HomeServises-title">
		<span >Услуги и ценовая политика</span></div>
		<div class="HomeServises-item first">
			<div class="HomeServises-name ">
				<img src="icons/diagnostika.svg" height="110" width="110">
				<span>Диагностика зубов</span>
			</div>
			<div class="HomeServises-more "><i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
			</div>
		</div>
		<div class="description_first style">
				<p>
					Забудьте об устаревшем пленочном рентгене, который используют государственные и большинство частных клиник – он дает крайне мало информации из-за отсутствия возможности увеличения отпечатка на пленке. Мы используем радиовизиограф, который позволяет изготовить прицельный цифровой снимок вашего зуба и сразу вывести его на экран. Во время консультации врач увеличивает снимок с целью выявления малейших недостатков и предлагает вам варианты лечения.
				</p>	
		</div>
		<div class="HomeServises-item second">
			<div class="HomeServises-name ">
				<img src="icons/brecets.svg" height="110" width="110">
				<span>Ортодонт. Исправление прикуса</span>
			</div>
			<div class="HomeServises-more "><i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
			</div>
		</div>
		<div class="description_second style">
				<p>
					Один из самых эффективных и популярных на сегодняшний день способов исправления прикуса – брекеты. В переводе с английского bracket означает «замок» или «скоба». Название отражает суть устройства: оно состоит из скобок, соединенных силовой дугой. Скобки прикрепляются к зубам специальным клеем, а под воздействием дуги зубы занимают нужное положение.
				</p>	
		</div>
		<div class="HomeServises-item thirth">
			<div class="HomeServises-name ">
				<img src="icons/implantant.svg" height="110" width="110">
				<span>Имплантация зубов</span>
			</div>
			<div class="HomeServises-more"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
			</div>
		</div>
		<div class="description_thirth style">
			<p>
				Перед постановкой имплантатов необходимой процедурой является профессиональная гигиена полости рта и обследование состояния костной ткани с помощью компьютерной томографии.
				Сама процедура состоит из двух этапов (реже с одного – определяется индивидуально врачом — имплантологом):
				1. Хирургический (вживление имплантата в костную ткань, установка формирователя десны);
				2. Ортопедический (установка коронки и абатмента).
				Хирургический этап проводится под местным наркозом (в редких случаях пациентам предлагается общий наркоз) в амбулаторных условиях клиники.
				Эти два этапа занимают от 3-6 месяцев и позволяют провести максимально физиологичное восстановление зубного ряда.
			</p>		
		</div>
		<div class="HomeServises-item fourth">
			<div class="HomeServises-name">
				<img src="icons/mirrow.png" height="110" width="110">
				<span>Терапевтическая стоматология</span>
			</div>
			<div class="HomeServises-more"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
			</div>
		</div>
		<div class="description_fourth style">
			<p>
				Забудьте об устаревшем пленочном рентгене, который используют государственные и большинство частных клиник – он дает крайне мало информации из-за отсутствия возможности увеличения отпечатка на пленке. Мы используем радиовизиограф, который позволяет изготовить прицельный цифровой снимок вашего зуба и сразу вывести его на экран. Во время консультации врач увеличивает снимок с целью выявления малейших недостатков и предлагает вам варианты лечения.
			</p>		
		</div>
		<div class="HomeServises-item fifth">
			<div class="HomeServises-name ">
				<img src="icons/ukol.svg" height="110" width="110">
				<span>Хирургия. Удаление зубов и кист</span>
			</div>
			<div class="HomeServises-more"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
			</div>
		</div>
		<div class="description_fifth style">
			<p>
				Один из самых эффективных и популярных на сегодняшний день способов исправления прикуса – брекеты. В переводе с английского bracket означает «замок» или «скоба». Название отражает суть устройства: оно состоит из скобок, соединенных силовой дугой. Скобки прикрепляются к зубам специальным клеем, а под воздействием дуги зубы занимают нужное положение.
			</p>	
		</div>
		<div class="HomeServises-item sixth">
			<div class="HomeServises-name">
				<img src="icons/diamon.svg" height="110" width="110">
				<span>Эстетическая стоматология</span>
			</div>
			<div class="HomeServises-more"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
			</div>
		</div>
		<div class="description_sixth style">
			<p>
				Перед постановкой имплантатов необходимой процедурой является профессиональная гигиена полости рта и обследование состояния костной ткани с помощью компьютерной томографии.
				Сама процедура состоит из двух этапов (реже с одного – определяется индивидуально врачом — имплантологом):
				1. Хирургический (вживление имплантата в костную ткань, установка формирователя десны);
				2. Ортопедический (установка коронки и абатмента).
				Хирургический этап проводится под местным наркозом (в редких случаях пациентам предлагается общий наркоз) в амбулаторных условиях клиники.
				Эти два этапа занимают от 3-6 месяцев и позволяют провести максимально физиологичное восстановление зубного ряда.
			</p>		
		</div>
	</div>
	</section>
	<section class="Form_of_visitation">
	<p><a id="form1"></a></p>
		<div class="Form_of_visitation_title">
			<div>
				<h2>Запишитесь на прием прямо сейчас</h2>
				<p>Какой-то текст, описывает какая классная у нас клиника, много качественных услуг она предлагает, и еще много много всего</p>
			</div>
		</div>
<?php 
	require_once('/forma.php');
?>
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
	<script type="text/javascript" src="js/common.js"></script>	
	</body>
</html>