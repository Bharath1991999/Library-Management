<html>
<head>
	<title>LIBRARY</title>
</head>

<body>
	
	<?php

		$user='root';
		$pass='';
		$host='localhost';
		
		$link=mysqli_connect($host,$user,$pass,'library');
		$member_id=$_POST['member_id'];
		$name=$_POST['name'];
		$mobile_no=$_POST['mobile'];
		$mail=$_POST['mail_id'];
		$password=$_POST['password'];

			$q="SELECT MEMBER_ID
				FROM member
				WHERE MEMBER_ID='$member_id'";
			
			$x=mysqli_query($link,$q);
			$r=mysqli_fetch_array($x);
			
			if(!$r)
			{
				$q="INSERT INTO member(MEMBER_ID,MEMBER_NAME,MOBILE_NO,MAIL_ID,PASSWORD) 
					VALUES ('$member_id','$name','$mobile_no','$mail','$password')";
				$x=mysqli_query($link,$q);
				if(!$x)
				{
					echo "<center>COULD NOT CREATE YOUR ACCOUNT. PLEASE TRY AGAIN</center>";
					include('signup_member.html');
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
					include('signup_member.html');
					exit();
			}
			
	?>
</body>
</html>