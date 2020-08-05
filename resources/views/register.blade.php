	<body>
		<h2> Buat Account Baru!</h2>
		<h4> Sign Up Form </h4>

		<form action="/welcome" method="POST">
			
			@csrf
			
			<label> First name:</label>
			
			<br><br>

			<input type="text" name="fname" id="fname">
			
			<br><br>
			
			<label> Last name:</label>
			
			<br><br>
			
			<input type="text" name="lname" id="lname">
			
			<br><br>
			
			<label> Gender: </label>
			
			<br><br>
			
			<input type="radio" name="gender" value="0"> Male <br>
			<input type="radio" name="gender" value="1"> Female <br>
			<input type="radio" name="gender" value="2"> Other
			
			<br><br>
			
			<label> Nationality: </label>
			
			<br><br>

			<select>
				<option value="indo">Indonesian</option>
				<option value="japan">Japanese</option>
				<option value="korea">Korean</option>
				<option value="malay">Malaysian</option>
			</select>

			<br><br>

			<label> Language Spoken: </label>

			<br><br>

			<input type="checkbox" name="lang" value="0"> Bahasa Indonesia <br>
			<input type="checkbox" name="lang" value="1"> English <br>
			<input type="checkbox" name="lang" value="2"> Other

			<br><br>

			<label> Bio: </label>

			<br><br>

			<textarea cols="30" rows="10"></textarea>

			<br><br>

			<input type="submit" value="Sign Up">
		</form>
	</body>
</html>