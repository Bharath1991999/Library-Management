<html>
	<head>
		<title>LIBRARY</title>
		<style type="text/css">
			.bg-text {
			  background-color: rgb(0,0,0);
			  background-color: rgba(0,0,0, 0.4);
			  color: white;
			  font-weight: bold;
			  border-radius: 5px;
			  border: 3px solid #80888e;
			  position: absolute;
			  top: 10%;
			  left: 33%;
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
		</style>
	</head>

	<body>
		<a href="librarian_main_page.php" class="btn">Home</a>
		<a href='login_librarian.php' class="lout">Logout</a>
		<div class="bg-text">
			<?php
				
				session_start();
				if( isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1)
				{
					$admin='root';
					$pass='';
					$host='localhost';
				
					$link=mysqli_connect($host,$admin,$pass,'library');
			?>
			<style type="text/css">
				body {
					background-image: url("cover.jpg");
					background-attachment: fixed;
					background-position: center;
					background-repeat: no-repeat;
					background-size: cover;
				}
				table {
				  color: #5bf3ff;
				  font-family: monospace;
				  font-size: 15px;
				}
				textarea {
					font-size: 15px;
					font-family: cursive;
					margin: 8px 2px;
					padding-left: 10px;
					box-sizing: border-box;
					border: 2.5px solid #ccc;
					-webkit-transition: 0.5s;
					transition: 0.5s;
					outline: none;
					border-radius: 10px;
					color: black;
					background-color: rgba(0,0,0,0.1);
				}
				textarea:focus {
					border: 3px solid #555;
					color: white;
					background-color: rgba(0,0,0,0.3);
				}
				input {
					width: 220px;
					height: 35px;
					font-size: 26px;
					font-family: monospace;
					color: white;
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

				input:focus {
					color: white;
					border: 3px solid #555;
					background-color: rgba(0,0,0,0.4);
				}
				.submit {
				  display: inline-block;
				  vertical-align: middle;
				   width: 200px;
				  height: 45px;
				  cursor: pointer;
				  border: none;
				  border-radius: 5px;
				  color: white;
				  font-size: 20px;
				  font-family: cursive;
				  background-color: rgba(15,202,219,0.7);
				  -webkit-transform: perspective(1px) translateZ(0);
				  transform: perspective(1px) translateZ(0);
				  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
				  -webkit-transition-duration: 0.3s;
				  transition-duration: 0.3s;
				  -webkit-transition-property: transform;
				  transition-property: transform;
				}
				.submit:hover, .submit:focus, .submit:active {
				  -webkit-transform: scale(0.9);
				  transform: scale(0.9);
				}
			</style>
			<center>
				<form action="reply.php"; method="POST">
					<table>
						<tr>
							<td align="right">COMPLAINT ID</td>
							<td><input type="text"; name="complaint_id"; required="required"></td>
						</tr>
						<tr>
							<td align="right">REPLY</td>
							<td><textarea name="reply" cols="40" rows="5" required='required'></textarea></td>
						</tr>
						<tr>
							<td colspan="2" align="center"><button type="submit" class="submit">SUBMIT</button></td>
						</tr>
					</table>
				</form>
			</center>
			<?php
				$q="SELECT COMPLAINT_ID,MEMBER_ID,COMPLAINT
					FROM complaint
					WHERE LIBRARIAN_ID IS NULL";
					
					$x=mysqli_query($link,$q);
					$r=mysqli_fetch_array($x);
					
					if(!$r)
					{
						echo "NO COMPLAINTS";
					}
					
					else
					{
						echo "<center><table border=1 cellpadding=10 style='text-align:center'>";
						echo "<th>COMPLAINT ID</th>
						<th>MEMBER ID</th>
						<th>COMPLAINT</th>";
					
						while ($r)
						{
							echo '<tr> 

							<td style="color:white">'.$r['COMPLAINT_ID'].'</td>
							<td style="color:white">'.$r['MEMBER_ID'].'</td>
							<td><textarea cols=30 rows=5 style="color:white">'.$r['COMPLAINT'].'</textarea></td>
							</tr>'; 
							$r = mysqli_fetch_array($x);
						}
						
						echo "</table></center>";
					}
				}
				
				else
				{
					echo "Session expired";
					exit();
				}
			?>
		</div>
	</body>
</html>
	