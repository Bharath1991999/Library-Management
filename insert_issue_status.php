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
			  font-family: courier;
			  font-size: 25px;
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
					$book_id=$_POST['book_id'];
					
					
					$q="SELECT *
						FROM books
						WHERE BOOK_ID NOT IN (SELECT BOOK_ID FROM issue_status)&& books.BOOK_ID='$book_id'";
						
					$x=mysqli_query($link,$q);
					$r=mysqli_fetch_array($x);
			?>
			<style type="text/css">
				.next {
				  display: inline-block;
				  vertical-align: middle;
				  background-color: rgba(15,202,219,0.8);
				  border-radius: 5px;
				  border: none;
				  width: 150px;
				  height: 40px;
				  text-align: center;
				  text-decoration: none;
				  -webkit-transform: perspective(1px) translateZ(0);
				  transform: perspective(1px) translateZ(0);
				  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
				  -webkit-transition-duration: 0.3s;
				  transition-duration: 0.3s;
				  -webkit-transition-property: box-shadow, transform;
				  transition-property: box-shadow, transform;
				}
				.next:hover, .next:focus, .next:active {
				  box-shadow: 0 10px 10px -10px rgba(0, 0, 0, 0.5);
				  -webkit-transform: scale(1.1);
				  transform: scale(1.1);
				}
			</style>
			<?php
						
					if(!$r)
					{
						echo "<h2>ENTER CORRECT BOOK ID</h2>";
						echo "<a href='select_book.php'>GO BACK</a>";	
					}
					
					else
					{
						$q="SELECT *
							FROM books
							WHERE BOOK_ID='$book_id'";
							
						$x=mysqli_query($link,$q);
						$r=mysqli_fetch_array($x);
						
						if(!$r)
						{
							echo "<h2>SOMETHING WENT WRONG... TRY AGAIN LATER</h2>";
							echo "<a href='select_book.php'>GO BACK</a>";	
						}
						
						else
						{
							echo "<center><table>
							<tr><td align='right'>BOOK ID : </td><td>".$r['BOOK_ID']."</td></tr>
							<tr><td align='right'>BOOK NAME : </td><td>".$r['BOOK_NAME']."</td></tr>
							<tr><td align='right'>AUTHOR : </td><td>".$r['AUTHOR']."</td></tr>";
								
							$_SESSION['book_id']=$book_id;
							echo "<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>";
							echo "<tr style='text-align: center;'><td><a href='insert_issue_status2.php' class='next'>NEXT </a></td>";
							echo "</form><td><a href='select_book.php' class='next'> CANCEL</a></td></tr></table></center>";
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
			