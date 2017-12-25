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