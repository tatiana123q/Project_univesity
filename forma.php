<form method="POST" action="forma2.php" id="feedback-form">
			<input required type="text" name="name" id="name" size="25" placeholder="Введите имя" />
			<input required type="text" name="second_name" id="second_name" size="25" placeholder="Введите фамилию" /><br>
			<input required type="number" name="phone" id="phone" size="25" placeholder="Введите телефон" />
			<input required type="email" name="mail" id="mail" size="25" placeholder="Введите почту" /><br>

			<select id="type_of_visitation" name="type_of_visitation">
				<option selected="selected">Тип посещения</option>
				<option value="1">Снимок</option>
				<option value="2">Хирургия</option>
				<option value="3">Осмотр</option>
			</select>
			<select id="type_of_doctor" name="type_of_doctor" >
				<option>Выбор врача</option>
				<option value="1">Петрова Д.М.</option>
				<option value="2">Синенко М.А.</option>
				<option value="3">Кириенко С.Г.</option>
				<option value="4">Шаповалов Н.И.</option>
				<option value="5">Марченко В.Г</option>
				<option value="6">Симаков О.Н.</option>
			</select><br>
			<input type="date" name="date" id="date" min="2017-12-26"><br>
			<button type="submit" form="feedback-form" value="Submit">Записаться</button>
</form>