<html>
<head>
	<title>LIBRARY</title>
	<style type="text/css">
		.bg-image {
		  background-image: url("cover.jpg");
		  filter: blur(8px);
		  -webkit-filter: blur(8px);
		  height: 100%; 
		  background-position: center;
		  background-repeat: no-repeat;
		  background-size: cover;
		}
		.bg-text {
		  background-color: rgb(0,0,0);
		  background-color: rgba(0,0,0, 0.4);
		  color: white;
		  font-weight: bold;
		  border-radius: 5px;
		  border: 3px solid #80888e;
		  position: absolute;
		  top: 50%;
		  left: 50%;
		  transform: translate(-50%, -50%);
		  z-index: 2;
		  width: 35%;
		  padding: 20px;
		  text-align: center;
		}
		.lout {
		  display: inline-block;
		  vertical-align: middle;
		  border-radius: 4px;
		  color: white;
		  background-color: #4caf50;
		  text-decoration: none;
		  border: none;
		  text-align: center;
		  font-family: cursive;
		  font-size: 20px;
		  padding: 8px;
		  width: 125px;
		  -webkit-transform: perspective(1px) translateZ(0);
		  transform: perspective(1px) translateZ(0);
		  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
		  position: relative;
		  -webkit-transition-duration: 0.3s;
		  transition-duration: 0.3s;
		  -webkit-transition-property: transform;
		  transition-property: transform;
		  position: absolute;
		  z-index: 2;
		  top: 0%;
		  right: 0%;
		}
		.lout:before {
		  position: absolute;
		  z-index: -1;
		  top: calc(50% - 10px);
		  right: 0;
		  content: '';
		  border-style: solid;
		  border-width: 10px 0 10px 10px;
		  border-color: transparent transparent transparent #4caf50;
		  -webkit-transition-duration: 0.3s;
		  transition-duration: 0.3s;
		  -webkit-transition-property: transform;
		  transition-property: transform;
		}
		.lout:hover, .lout:focus, .lout:active {
		  -webkit-transform: translateX(-10px);
		  transform: translateX(-10px);
		}
		.lout:hover:before, .lout:focus:before, .lout:active:before {
		  -webkit-transform: translateX(10px);
		  transform: translateX(10px);
		}
		a {
			color: #ffffff;
			font-family: cursive;
			text-decoration: none;
			font-size: 25px;
		}

		a:hover {
			color: #000000;
		}
		.btn {
		  display: inline-block;
		  box-sizing: border-box;
		  border-radius: 4px;
		  background-color: #4caf50;
		  text-decoration: none;
		  border: none;
		  color: #FFFFFF;
		  text-align: center;
		  font-family: cursive;
		  font-size: 20px;
		  padding: 8px;
		  width: 125px;
		  vertical-align: middle;
		  -webkit-transform: perspective(1px) translateZ(0);
		  transform: perspective(1px) translateZ(0);
		  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
		  position: relative;
		  -webkit-transition-duration: 0.3s;
		  transition-duration: 0.3s;
		  -webkit-transition-property: transform;
		  transition-property: transform;
		  position: absolute;
		  z-index: 2;
		  top: 0%;
		  left: 0%;
		}
		.btn:before {
		  position: absolute;
		  z-index: -1;
		  content: '';
		  top: calc(50% - 10px);
		  left: 0;
		  border-style: solid;
		  border-width: 10px 10px 10px 0;
		  border-color: transparent #4caf50 transparent transparent;
		  -webkit-transition-duration: 0.3s;
		  transition-duration: 0.3s;
		  -webkit-transition-property: transform;
		  transition-property: transform;
		}
		.btn:hover, .btn:focus, .btn:active {
		  -webkit-transform: translateX(10px);
		  transform: translateX(10px);
		}
		.btn:hover:before, .btn:focus:before, .btn:active:before {
		  -webkit-transform: translateX(-10px);
		  transform: translateX(-10px);
		}
		table {
		  color: #5bf3ff;
		  font-family: monospace;
		  font-size: 25px;
		  text-align: center;
		}
		
	</style>
</head>

<body>
	<a href="member_main_page.php" class="btn">Home</a>
	<a href='login_member.php' class="lout">Logout</a>
	<div class="bg-image"></div>
	<div class="bg-text">
	<?php
		session_start();
		if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1)
		{
			$user='root';
			$pass='';
			$host='localhost';
					
			$link=mysqli_connect($host,$user,$pass,'library');
			
			?>
			<style type="text/css">
				.text {
					width: 250px;
					height: 35px;
					font-size: 25px;
					font-family: calibri;
					margin: 8px 2px;
					padding-left: 10px;
					box-sizing: border-box;
					border: 2.5px solid #ccc;
					-webkit-transition: 0.5s;
					transition: 0.5s;
					outline: none;
					border-radius: 10px;
					color: #000000;
					background-color: rgba(0,0,0,0.1);
				}

				.text:focus {
					border: 3px solid #555;
					background-color: rgba(0,0,0,0.3);
				}
				.submit {
				  display: inline-block;
				  vertical-align: middle;
				  cursor: pointer;
				  border-radius: 7px;
				  border: none;
				  background-color: rgba(15,202,219,0.7);
				  width: 200px;
				  height: 40px;
				  color: white;
				  -webkit-transform: perspective(1px) translateZ(0);
				  transform: perspective(1px) translateZ(0);
				  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
				  -webkit-transition-duration: 0.3s;
				  transition-duration: 0.3s;
				  -webkit-transition-property: transform;
				  transition-property: transform;
				}
				.submit:hover, .submit:focus, .submit:active {
				  -webkit-transform: scale(0.95);
				  transform: scale(0.95);
				}
			</style>
			<form action='update_member.php' method='POST'>
					<center><table cellpadding="10">
						<tr>
							<td align="right">ENTER PASSWORD:</td>
							<td><input type='password' name='password' required='required' class="text">
							</td>
						</tr>
						<tr>
							
							<td><input type='text' name='mobile' class="text">
							</td>
							<td>
								<input type='submit' name='submit' value='UPDATE MOBILE' class="submit">
							</td>
						</tr>
						<tr>
							
							<td><input type='text' name='mail_id' class="text">
							</td>
							<td>
								<input type='submit' name='submit' value='UPDATE MAILID' class="submit">
							</td>
						</tr>
						<tr>
							
							<td><input type='password' name='u_password' class="text">
							</td>
							<td>
								<input type='submit' name='submit' value='UPDATE PASSWORD' class="submit">
							</td>
						</tr>
					</table>
			
			<?php
		}
			
		else
		{
			echo "Session expired";
		}
	?>
	</div>
</body>
</html>