<html>
	<head>
		<title>LIBRARY</title>
		<style type="text/css">
			body {
				background-image: url('cover.jpg');
				background-attachment: fixed;
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
			  top: 60%;
			  left: 50%;
			  transform: translate(-50%, -50%);
			  z-index: 2;
			  width: 45%;
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
				$member_id=$_SESSION['MEMBER_ID'];
				
				$q="SELECT COMPLAINT,REPLY
					FROM complaint
					WHERE MEMBER_ID='$member_id'
					ORDER BY COMPLAINT_ID DESC";
					
				$x=mysqli_query($link,$q);
				$r=mysqli_fetch_array($x);
		?>
		<style type="text/css">
			.txtof {
			  color: #5bf3ff;
			  white-space: nowrap;
			  font-family: monospace;
			}
			textarea {
				font-size: 15px;
				font-family: cursive;
				margin: 8px 2px;
				padding-left: 10px;
				box-sizing: border-box;
				border: 1.5px solid #ccc;
				-webkit-transition: 0.5s;
				transition: 0.5s;
				outline: none;
				border-radius: 10px;
				color: white;
				background-color: rgba(0,0,0,0.1);
			}
			textarea:focus {
				border: 3px solid #555;
				background-color: rgba(0,0,0,0.3);
			}
		</style>
		<?php
				if(!$r)
				{
					echo "<h2>NO COMPLAINTS</h2>";
				}
				
				else
				{
					echo "<center><table border=1; cellpadding=10% class='txtof'>";
					echo "<th>COMPLAINT</th>
					<th>REPLY</th>";
				
				while ($r)
				{
					echo '<tr> 
					<td><textarea cols=30 rows=5>'.$r['COMPLAINT'].'</textarea></td>
					<td><textarea cols=30 rows=5>'.$r['REPLY'].'</textarea></td>
					</tr>'; 
					$r = mysqli_fetch_array($x);
				}
				echo "</table></center>";
				}
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
	
			