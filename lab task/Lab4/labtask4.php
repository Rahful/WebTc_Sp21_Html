<html>
<head>
</head>
<body>

        <fieldset>
            <legend><h1>Club Registrations</h1></legend>
            <form action="" method="post">
                <table>
                    <tr>
                        <td><span>Name</span></td>
                        <td>: <input type="text" name="name" placeholder ="Name">
                            <span><?php echo $err_name;?></span></td>
                    </tr>
                    <tr>
                        <td><span>Username</span></td>
                        <td>: <input type="text" name="uname" placeholder ="Username">
                            <span><?php echo $err_uname;?></span></td>
                    </tr>
                    <tr>
                        <td><span>Password</span></td>
                        <td>: <input type="password" name="pass" placeholder ="Password">
                        <span><?php echo $err_pass;?></span></td>
                    </tr>
                    <tr>
                        <td><span>Confirm Password</span></td>
                        <td>: <input type="password" name="cpass" placeholder ="Confirm Password">
                        <span><?php echo $err_cpass;?></span></td>
                    </tr>
                    <tr>
                        <td><span>Email</span></td>
                        <td>: <input type="text" name="mail" placeholder ="E-mail">
                        <span><?php echo $err_mail;?></span></td>
                    </tr>
                    <tr>
                        <td><span>Phone</span></td>
                        <td>: <input type="text" name="code" placeholder ="code" size='4'> - <input type="text" name="phone" placeholder ="Number">
                        <span><?php echo $err_phone;?></span></td>
                    </tr>

                    <tr>
                        <td><span>Address</span></td>
                        <td>: <input type="text" name="city" placeholder ="city" size='6'> - <input type="text" name="state" placeholder ="State" size='6'> </br>
                         <input type="text" name="zip" placeholder ="Postal zip code">
                        <span><?php echo $err_address ;?></span>
                        <span><?php echo $err_city ;?></span>
                        <span><?php echo $err_city ;?></span></td>
                    </tr>
                    <tr>
					<td><span><b>Birth date</b>:</span></td>
					<td>
						<select name="Birth date">
							<option disabled selected>Date</option>
							<?php
							for($i=1 ;$i<=31;$i++){
								echo "<option>$i</option>";
							}
							?>
						</select>
						<select name="Birth date">
							<option disabled selected>Month</option>
							<option>Jan</option>
							<option>Feb</option>
							<option>March</option>
							<option>April</option>
							<option>May</option>
							<option>June</option>
							<option>July</option>
							<option>Aug</option>
							<option>Sep</option>
							<option>Nov</option>
							<option>Dec</option>
						</select>
						<select name="Birth date">
							<option disabled selected>year</option>
							<?php
							for($i=1950 ;$i<=2021;$i++){
								echo "<option>$i</option>";
							}
							?>
						</select>
					</td>
				</tr>
                
                    <tr>
                        <td><span>Gender</span></td>
                        <td>: <input type="radio" name="gender" value="male">Male
                            <input type="radio" name="gender" value="male">Female
                            <span><?php echo $err_gender;?></span></td>
                    </tr>
                    <tr>
                        <td><span>Where did you hear about us</span></td>
                        <td> <input type="checkbox"value="A friend of colleague" name="hear[]"> A friend of colleague </br>
                        <input type="checkbox" value="Google" name="hear[]">Google </br>
                        <input type="checkbox" value="Blogpost" name="hear[]">Blogpost </br>
                        <input type="checkbox" value="News Article" name="hear[]">News Article </br> 
                        <span><?php echo $err_hear;?></span></td>
                    </tr>
                    
                    <tr>
                        <td><span>Bio:</span></td>
                        <td><textarea name="tarea"></textarea><br>
                        <input type="submit" value="Register" >
                        <span><?php echo $err_bio;?></span></td>


                </table>


            </form> 
    </fieldset>   
</body>
</html>