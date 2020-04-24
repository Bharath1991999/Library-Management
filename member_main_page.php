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
		.disp {
		  background-color: rgb(0,0,0);
		  background-color: rgba(0,0,0, 0.4);
		  color: rgba(255,255,255,0.6);
		  font-weight: bold;
		  font-family:cursive;
		  font-size: 18px;
		  border-radius: 15px;
		  border: 3px solid ;
		  position: absolute;
		  top: 10%;
		  left: 1%;
		  transform: translate(-50%, -50%);
		  z-index: 2;
		  width: 20%;
		  padding: 20px;
		  text-align: center;
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
		  width: 26%;
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
	</style>
</head>

<body>
	<a href='login_member.php' class="lout">Logout</a>
	<div class="bg-image"></div>
	
		<?php
			
			session_start();
			if( isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1)
			{
				$user='root';
					$pass='';
					$host='localhost';
					$member_id=$_SESSION['MEMBER_ID'];
							
					$link=mysqli_connect($host,$user,$pass,'library');
					$q="SELECT MEMBER_NAME
						FROM member
						WHERE MEMBER_ID='$member_id'";
						
					$x=mysqli_query($link,$q);
					$r=mysqli_fetch_array($x);
					
					if($r)
					{
						echo '<div class="disp"; style="text-align:right">Hello '.$r['MEMBER_NAME'].'</div>';
					}
		?>
		<div class="bg-text">
		<style type="text/css">
			.grow {
			  display: inline-block;
			  vertical-align: middle;
			  -webkit-transform: perspective(1px) translateZ(0);
			  transform: perspective(1px) translateZ(0);
			  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
			  -webkit-transition-duration: 0.3s;
			  transition-duration: 0.3s;
			  -webkit-transition-property: transform;
			  transition-property: transform;
			}
			.grow:hover, .grow:focus, .grow:active {
			  -webkit-transform: scale(1.1);
			  transform: scale(1.1);
			}
		</style>
		<br><center><a href='get_member_information.php' class="grow">GET MY INFORMATION</a></center>
		<br><br>
		<center><a href='update_member_information.php' class="grow">UPDATE MY INFORMATION</a></center>
		<br><br>
		<center><a href='search_book1.php' class="grow">SEARCH BOOKS</a></center>
		<br><br>
		<center><a href='select_book.php' class="grow">SELECT BOOK</a></center>
		<br><br>
		<center><a href='current_issues.php' class="grow">CURRENT ISSUES</a></center>
		<br><br>
		<center><a href='previous_issues.php' class="grow">PREVIOUS ISSUES</a></center>
		<br><br>
		<center><a href="present_fines.php" class="grow">FINE</a></center>
		<br><br>
		<center><a href='complaint_box.php' class="grow">COMPLAINTS</a></center>
		<br><br>
		<center><a href='previous_complaints.php' class="grow">PREVIOUS COMPLAINTS</a></center>
		<br><br>
		
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