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
			table {
			  color: #5bf3ff;
			  font-family: monospace;
			  font-size: 15px;
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
			<style>
				.back {
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
				.back:hover, .back:focus, .back:active {
				  -webkit-transform: scale(1.2);
				  transform: scale(1.2);
				}
			</style>
			<?php
					$user='root';
					$pass='';
					$host='localhost';

							
					$link=mysqli_connect($host,$user,$pass,'library');
					$librarian_id=$_SESSION['LIBRARIAN_ID'];
						
					$book_id=$_POST['book_id'];
					$member_id=$_POST['member_id'];
								$librarian_id=$_SESSION['LIBRARIAN_ID'];

					
					$q="SELECT BOOK_ID
						FROM issue_status
						WHERE BOOK_ID='$book_id' AND MEMBER_ID='$member_id'";
						
						$x=mysqli_query($link,$q);
						$r=mysqli_fetch_array($x);

					if(!$r)
					{
						echo "<h2>**ENTER CORRECT DETAILS**</h2><br>";
						echo "<a href='return_book.php' class='back'>GO BACK</a>";	
					}
					
					else
					{
						$q="SELECT ISSUE_DATE
						FROM issue_status
						WHERE BOOK_ID='$book_id' AND MEMBER_ID='$member_id'";
						
										
						$x=mysqli_query($link,$q);
						$r=mysqli_fetch_array($x);
						
						$issue_date=$r['ISSUE_DATE'];
			
						$q="SELECT count(*)
							FROM return_status";
							
						$x=mysqli_query($link,$q);
						$r=mysqli_fetch_array($x);
						
						$count=$r['count(*)']+1;
						
						$q="SELECT DATEDIFF( CURDATE(),ISSUE_DATE) AS DAYDIFF
						    FROM issue_status
						    WHERE BOOK_ID='$book_id' AND MEMBER_ID='$member_id'";
							
						$x=mysqli_query($link,$q);
						$r=mysqli_fetch_array($x);
						$f=$r['DAYDIFF'];
						
						if($f < 30)
						{
							$fine=0;
							$fine_status='PAID';
						}
						
						else
						{
							$fine= ($f-30)*2;
							$fine_status='NOT PAID';
						}
						
										
						$q="INSERT INTO return_status(RETURN_ID,MEMBER_ID,LIBRARIAN_ID,BOOK_ID,ISSUE_DATE,RETURN_DATE)
							VALUES ($count,'$member_id','$librarian_id','$book_id','$issue_date',CURDATE())";
						$x=mysqli_query($link,$q);
						
						if(!$x)
						{
							echo "<h2>**BOOK IS NOT RETURNED**</h2><br>";
							echo "<a href='return_book.php' class='back'>GO BACK</a>";						
						}
						
						else
						{
							if($fine>0)
							{
								$q="INSERT INTO fine(RETURN_ID,FINE,FINE_STATUS) VALUES ($count,'$fine','$fine_status')";
								$x=	$x=mysqli_query($link,$q);
								
									if(!$x)
								{
									echo "<h2>**BOOK IS NOT RETURNED**</h2><br>";
									echo "<a href='return_book.php' class='back'>GO BACK</a>";
								}
								
								else
								{
									$q="DELETE FROM issue_status WHERE BOOK_ID='$book_id' AND MEMBER_ID='$member_id'";
									$x=mysqli_query($link,$q);
								
									if(!$x)
									{
										echo "<h2>**BOOK IS NOT RETURNED**</h2><br>";
										echo "<a href='return_book.php' class='back'>GO BACK</a>";		
									}
									else
									{
										echo "<h2>THE BOOK IS RETURNED SUCCESSFULLY</h2><br>";
										echo "<a href='return_book.php' class='back'>GO BACK</a>";		
									}	
								}
							}
							else
							{
								$q="DELETE FROM issue_status WHERE BOOK_ID='$book_id' AND MEMBER_ID='$member_id'";
								$x=mysqli_query($link,$q);
								
								if(!$x)
								{
										echo "<h2>**BOOK IS NOT RETURNED**</h2><br>";
										echo "<a href='return_book.php' class='back'>GO BACK</a>";		
								}
								else
								{
									echo "<h2>THE BOOK IS RETURNED SUCCESSFULLY</h2><br>";
									echo "<a href='return_book.php' class='back'>GO BACK</a>";
								}					
							}
						}
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