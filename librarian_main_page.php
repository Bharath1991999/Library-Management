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
	<a href='login_librarian.php' class="lout">Logout</a>
	<div class="bg-image"></div>
	
		<?php
		
			session_start();
			if( isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1)
			{
				$user='root';
					$pass='';
					$host='localhost';
					$librarian_id=$_SESSION['LIBRARIAN_ID'];
							
					$link=mysqli_connect($host,$user,$pass,'library');
					$q="SELECT LIBRARIAN_NAME
						FROM librarian
						WHERE LIBRARIAN_ID='$librarian_id'";
						
					$x=mysqli_query($link,$q);
					$r=mysqli_fetch_array($x);
					
					if($r)
					{
						echo '<div class="disp"; style="text-align:right">Hello '.$r['LIBRARIAN_NAME'].'</div>';
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
				<br><center><a href='get_librarian_information.php' class="grow">GET MY INFORMATION</a></center>
				<br><br>
				<center><a href='update_librarian_information.php' class="grow">UPDATE MY INFORMATION</a></center>
				<br><br>
				<center><a href='insert_book.php' class="grow">NEW BOOK ARRIVAL</a></center>
				<br><br>
				<center><a href='librarian_search_book.php' class="grow">BOOK STATUS</a></center>
				<br><br>
				<center><a href='search_book3.php' class="grow">FIND BOOK</a></center>
				<br><br>
				<center><a href='return_book.php' class="grow">RETURN BOOK</a></center>
				<br><br>
				<center><a href='fine_status.php' class="grow">UPDATE FINE STATUS</a></center>
				<br><br>
				<center><a href='reply_box.php' class="grow">REPLY TO COMPLAINTS</a></center>
				<br>
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