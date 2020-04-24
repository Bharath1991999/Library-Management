<html>
	<head>
		<title>LIBRARY</title>
		<style type="text/css">
			.bg-image {
			  background-image: url("cover.jpg");
			  filter: blur(8px);
			  -webkit-filter: blur(8px);
			  height: 100%;
			  background-attachment: fixed;
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
			  width: 40%;
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
					
					$q='SELECT *
						FROM fine,return_status
						WHERE FINE_STATUS="NOT PAID" AND fine.RETURN_ID=return_status.RETURN_ID';
						
					$x=mysqli_query($link,$q);
			?>
			<style type="text/css">
				input {
					width: 220px;
					height: 35px;
					font-size: 26px;
					font-family: monospace;
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
					border: 3px solid #555;
					color: white;
					background-color: rgba(0,0,0,0.4);
				}
				.paid {
				  display: inline-block;
				  vertical-align: middle;
				  cursor: pointer;
				  width: 200px;
				  height: 40px;
				  border-radius: 5px;
				  border: none;
				  background-color: rgb(15,202,219);
				  -webkit-transform: perspective(1px) translateZ(0);
				  transform: perspective(1px) translateZ(0);
				  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
				  position: relative;
				  -webkit-transition-duration: 0.3s;
				  transition-duration: 0.3s;
				  -webkit-transition-property: transform;
				  transition-property: transform;
				}
				.paid:before {
				  pointer-events: none;
				  position: absolute;
				  z-index: -1;
				  content: '';
				  top: 100%;
				  left: 5%;
				  height: 10px;
				  width: 90%;
				  opacity: 0;
				  background: -webkit-radial-gradient(center, ellipse, rgba(0, 0, 0, 0.35) 0%, rgba(0, 0, 0, 0) 80%);
				  background: radial-gradient(ellipse at center, rgba(0, 0, 0, 0.35) 0%, rgba(0, 0, 0, 0) 80%);
				  -webkit-transition-duration: 0.3s;
				  transition-duration: 0.3s;
				  -webkit-transition-property: transform, opacity;
				  transition-property: transform, opacity;
				}
				.paid:hover, .paid:focus, .paid:active {
				  -webkit-transform: translateY(-5px);
				  transform: translateY(-5px);
				}
				.paid:hover:before, .paid:focus:before, .paid:active:before {
				  opacity: 1;
				  -webkit-transform: translateY(5px);
				  transform: translateY(5px);
				}
				td
					 {
						color: #5bf3ff;
					}
			</style>
			<?php
					echo "<form action='fine_paid.php'; method='POST'><center><table>
					<tr><td>RETURN ID</td><td><input type='text' name='return_id' required='required'></td></tr>
					<tr><td colspan='2' align='center'><button type='submit' class='paid'>PAID</button></td></tr>
					</table></center></form>";
					
					echo '<h2>STUDENTS WITH FINE</h2>';
					
					echo "<table border=1; cellpadding=10%>";
					
					echo "	<th>RETURN_ID</th>
							<th>MEMBERID</th>
						   <th>BOOK ID</th>
							<th>ISSUE_DATE</th>
						   <th>RETURN DATE</th>
							<th>FINE</th>";
					
					while($r=mysqli_fetch_array($x))
					{
						echo '<tr> 
						<td>'.$r['RETURN_ID'].'</td>
						<td>'.$r['MEMBER_ID'].'</td>
						<td>'.$r['BOOK_ID'].'</td>
						<td>'.$r['ISSUE_DATE'].'</td>
						<td>'.$r['RETURN_DATE'].'</td> 
						<td>'.$r['FINE'].'</td>
						</tr>'; 
					}
					
					echo "</table></br></br>";
					
					
				}
				
				else
				{
					echo "Session expired";
				}
			?>
		</div>
	</body>
</html>