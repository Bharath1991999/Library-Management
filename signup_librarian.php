<html>
	<head>
		<title>LIBRARY</title>
	</head>

	<body>
		<?php
			$admin='root';
			$pass='';
			$host='localhost';
			
			$link=mysqli_connect($host,$admin,$pass,'library');
			$librarian_id=$_POST['librarian_id'];
			$name=$_POST['name'];
			$mobile_no=$_POST['mobile'];
			$mail_id=$_POST['mail_id'];
			$password=$_POST['password'];
			
				$q="SELECT LIBRARIAN_ID
					FROM librarian
					WHERE LIBRARIAN_ID='$librarian_id'";
					
				$x=mysqli_query($link,$q);
				$r=mysqli_fetch_array($x);
				
				if(!$r)
				{
					$q="INSERT INTO librarian(LIBRARIAN_ID,LIBRARIAN_NAME,MAIL_ID,MOBILE_NO,PASSWORD)
						VALUES ('$librarian_id','$name','$mail_id','$mobile_no','$password')";
					$x=mysqli_query($link,$q);
					if(!$x)
					{
						echo "<center>COULD NOT CREATE YOUR ACCOUNT. PLEASE TRY AGAIN</center>";
						include('signup_librarian.html');
						exit();
					}
								
					else
					{
						echo "<center style='color: white'>YOU HAVE SUCCESSFULLY CREATED AN ACCOUNT</center>";
						include('index.html');
						exit();
					}
				}
				
				else
				{
					echo "<center style='color: red'><h2>**ACCOUNT WITH THIS ID ALREADY EXISTS**</h2></center>";
					include('signup_librarian.html');
					exit();
					
				}

		?>
	</body>
</html>