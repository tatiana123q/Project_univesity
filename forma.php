<form method="POST" action="forma2.php" id="feedback-form">
			<input required type="text" name="name" id="name" size="25" placeholder="Введите имя" />
			<input required type="text" name="second_name" id="second_name" size="25" placeholder="Введите фамилию" /><br>
			<input required type="number" name="phone" id="phone" size="25" placeholder="Введите телефон" />
			<input required type="email" name="mail" id="mail" size="25" placeholder="Введите почту" /><br>

			<select name="type_of_visitation">
				<option selected="selected">Тип посещения</option>
				<option >Снимок</option>
				<option >Хирургия</option>
				<option>Осмотр</option>
			</select>
			<select name="type_of_doctor" >
				<option selected="selected">Выбор врача</option>
				<option>Петрова Д.М.</option>
				<option>Синенко М.А.</option>
				<option>Кириенко С.Г.</option>
				<option>Шаповалов Н.И.</option>
				<option>Марченко В.Г</option>
				<option>Симаков О.Н.</option>
			</select><br>
			<input type="date" name="date" id="date" min="2017-12-17"><br>
			<button type="submit" form="feedback-form" value="Submit">Записаться</button>
</form>