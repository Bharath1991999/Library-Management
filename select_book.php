<html>
	<head>
		<title>LIBRARY</title>
		<style type="text/css">
			
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
				td {
					color: white;
				}
		</style>
	</head>

	<body>
		<a href="member_main_page.php" class="btn">Home</a>
		<a href='login_member.php' class="lout">Logout</a>
			<?php
				session_start();
				if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1)
				{					
					$user='root';
					$pass='';
					$host='localhost';
					
					$member_id=$_SESSION['MEMBER_ID'];
				
					$link=mysqli_connect($host,$user,$pass,'library');
					
					$q="SELECT *
						FROM fine,return_status
						WHERE return_status.MEMBER_ID='$member_id' AND fine_status='NOT PAID'
						AND return_status.RETURN_ID=fine.RETURN_ID";

					$x=mysqli_query($link,$q);
					$r=mysqli_fetch_array($x);
			?>
			<style type="text/css">
				body {
					background-image: url("cover.jpg");
					background-repeat: no-repeat;
					background-size: cover;
					background-position: center;
					background-attachment: fixed;
				}
				.bg-text {
			  background-color: rgb(0,0,0);
			  background-color: rgba(0,0,0, 0.3);
			  color: white;
			  font-weight: bold;
			  border-radius: 5px;
			  border: 3px solid #80888e;
			  position: absolute;
			  top: 80%;
			  left: 50%;
			  transform: translate(-50%, -50%);
			  z-index: 2;
			  width: 35%;
			  padding: 20px;
			  text-align: center;
			}

			.bg-text1{
			  background-color: rgb(0,0,0);
			  background-color: rgba(0,0,0, 0.3);
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
			<?php
					
					if($r)
					{
						echo '<div class="bg-text1">';
						echo "YOU NEED TO PAY FINE.....YOU CANNOT ISSUE BOOKS</div>";
					}
					
					else
					{
						
						$q="SELECT *
							FROM issue_status
							WHERE MEMBER_ID='$member_id'
							GROUP BY MEMBER_ID HAVING count(*)>=3";
							
						$x=mysqli_query($link,$q);
						$r=mysqli_fetch_array($x);
						
						if($r)
						{
							echo '<div class="bg-text1">';
							echo "YOU ALREADY ISSUED THREE BOOKS....YOU CAN'T ISSUE MORE THAN IT</div>";
						}
						
						else
						{
							echo '<div class="bg-text">';
							echo "<form action='insert_issue_status.php'; method='POST'>
							<center><table><tr><td>BOOK ID</td>
							<td><input type='text'; name='book_id'; required='required'></td></tr>
							<tr><td colspan='2' align='center'><button type='submit' class='submit'>ISSUE</button>
							</td></tr></table></center></form>";
							
							$q="SELECT BOOK_ID,BOOK_NAME,AUTHOR,count(*)
							FROM books 
							WHERE BOOK_ID NOT IN ( SELECT BOOK_ID FROM issue_status)
							GROUP BY BOOK_NAME,AUTHOR";
								
							$r=mysqli_query($link,$q);
							
							echo 'AVAILABLE BOOKS IN LIBRARY:';
							
							echo "<table border=1; cellpadding=10% style='background-color: rgba(0,0,0,0.3)'>";
							echo "<th>BOOK ID</th>
							<th>BOOK NAME</th>
							<th>BOOK AUTHOR</th>
							<th>NO OF COPIES";
								
							while ($row = mysqli_fetch_array($r))
							{
								echo '<tr> 

								<td>'.$row['BOOK_ID'].'</td>
								<td>'.$row['BOOK_NAME'].'</td>
								<td>'.$row['AUTHOR'].'</td> 
								<td>'.$row['count(*)'].'</td> 
								</tr>'; 
							}
							echo "</table>";

						}
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