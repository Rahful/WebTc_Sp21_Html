<?php
	 if(isset($_POST["submit"]))
	 {

              echo "Username: ".$_POST["uname"]."<br>";
              echo "Password: ".$_POST["pass"]."<br>";
              echo "Gender: ".$_POST["gender"]."<br>";
              echo "Profession: ".$_POST["profession"]."<br>";
              echo "Biography: ".$_POST["bio"]."<br>";
              echo "Date: ".$_POST["date"]."<br>";
              echo "E-Mail: ".$_POST["email"]."<br>";
              //echo "Salary: ".$_POST["salary"]."<br>";
			  $var = $_POST["Hobbies"];
			  echo "Hobbies: ";
			  count($var);
			  for($i=0;$i<count($var);$i++)
			  {
				  echo $var[$i].", ";
			  }
	 }
		?>
<html>
	<head></head>
	<body>
		<h1>User Registration</h1>
		<form action="" method="post">
			<table>
				<tr>
					<td><span><b>Username</b>:</span></td>
					<td><input type="text" name="uname"></td>
				</tr>
				<tr>
					<td><span><b>Password</b>:</span></td>
					<td><input type="password" name="pass"></td>
				</tr>
				<tr>
					<td><span><b>Gender</b>:</span></td>
					<td><input type="radio" name="gender" value="Male"><span>Male</span>
					    <input type="radio" name="gender" value="Female"><span>Female</span></td>
				</tr>
				<tr>
					<td><span><b>Hobbies</b>:</span></td>
					<td><input type="checkbox" name="Hobbies[]" value="Movies"><span>Movies</span>
					    <input type="checkbox" name="Hobbies[]" value="Music"><span>Music</span>
						<input type="checkbox" name="Hobbies[]" value="Games"><span>Games</span>
						<input type="checkbox" name="Hobbies[]" value="Sports"><span>Sports</span></td>
				</tr>
				<tr>
					<td><span><b>Profession</b>:</span></td>
					<td>
						<select name="profession">
							<option disabled selected>Choose One</option>
							<option>Teaching</option>
							<option>Service</option>
							<option>Business</option>
							<option>others</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><span><b>Email</b>:</span></td>
					<td><input type="email" name="email"></td>
				</tr>
				<tr>
					<td><span><b>Mobile/Phone</b>:</span></td>
					<td><input type="tel" name="phone_no"></td>
				</tr>
				<tr>
					<td><span><b>Date</b>:</span></td>
					<td><input type="date" name="date"></td>
				</tr>
                <tr>
					<td><span><b>Bio:</span></td>
                    <td><textarea name="bio"></textarea><br></td>
				</tr>
			</table>
			<br>
			<input type="submit" name="submit" value="submit">
		</form>
	</body>
</html>