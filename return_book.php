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
			td {
				color: rgb(15,202,219);
				font-family: monospace;
				font-size: 24px;
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
			?>
			
			<?php
				$user='root';
				$pass='';
				$host='localhost';
						
				$link=mysqli_connect($host,$user,$pass,'library');
				
				$q='SELECT *
					FROM issue_status';
					
				$x=mysqli_query($link,$q);

				echo "<center>
						<form action='insert_return_status.php'; method='POST'>
							<table>
								<tr>
									<td>MEMBER ID</td>
									<td><input type='text' name='member_id' required='required'></td>
								</tr>
								<tr>
									<td>BOOK ID</td>
									<td><input type='text' name='book_id' required='required'></td>
								</tr>
								<tr><td> </td><td> </td></tr>
								<tr>
									<td colspan='2' align='center'><button type='submit' class='return'>RETURN</button></td>
								</tr>
							</table>
						</form>
						</center>
						<style>
							@-webkit-keyframes return {
							  50% {
							    background-color: rgba(32, 152, 209, 0.75);
							  }
							}
							@keyframes return {
							  50% {
							    background-color: rgba(32, 152, 209, 0.75);
							  }
							}
							.return {
							  display: inline-block;
							  vertical-align: middle;
							  width: 200px;
							  height: 40px;
							  border-radius: 5px;
							  border: none;
							  cursor: pointer;
							  background-color: #108899;
							  -webkit-transform: perspective(1px) translateZ(0);
							  transform: perspective(1px) translateZ(0);
							  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
							  overflow: hidden;
							  -webkit-transition-duration: 0.5s;
							  transition-duration: 0.5s;
							  -webkit-transition-property: color, background-color;
							  transition-property: color, background-color;
							}
							.return:hover, .return:focus, .return:active {
							  -webkit-animation-name: return;
							  animation-name: return;
							  -webkit-animation-duration: 1s;
							  animation-duration: 1s;
							  -webkit-animation-delay: 0.5s;
							  animation-delay: 0.5s;
							  -webkit-animation-timing-function: linear;
							  animation-timing-function: linear;
							  -webkit-animation-iteration-count: infinite;
							  animation-iteration-count: infinite;
							  background-color: #2098ff;
							  color: white;
							}
							input {
							width: 220px;
							height: 30px;
							font-size: 26px;
							font-family: courier;
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
								background-color: rgba(0,0,0,0.3);
							}
						</style>
						";
				
				echo '<h3 align="center">ISSUED BOOKS</h3>';
				
				echo "<center><table border=1 cellpadding=15%>";
					echo "<th>MEMBER_ID</th>
						   <th>BOOK ID</th>
						   <th>ISSUE_DATE</th>";
				
				while($r=mysqli_fetch_array($x))
				{
					echo '<tr> 

					<td>'.$r['MEMBER_ID'].'</td>
					<td>'.$r['BOOK_ID'].'</td>
					<td>'.$r['ISSUE_DATE'].'</td> 
					</tr>'; 
				}
				
				echo "</table></center></br></br>";
				
				
				}
				
				else
					{
						echo "session expired";
						exit();
					}
			?>
		</div>
	</body>
</html>
