<a onclick="show('block')"><i class="fa fa-user" aria-hidden="true"></i></a>
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