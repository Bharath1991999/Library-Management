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
		
			$member_id=$_POST['member_id'];
			$password=$_POST['password'];
		
			$q="SELECT PASSWORD
				FROM member
				WHERE MEMBER_ID='$member_id'";
			
			$r=mysqli_query($link,$q);
			$t=mysqli_fetch_array($r);
		
			if($t['PASSWORD']==$password)
			{
				session_start();
				$_SESSION['IS_AUTHENTICATED'] = 1; 
				$_SESSION['MEMBER_ID'] = $member_id; 
				header('location:member_main_page.php');
			}
		
			else
			{
				echo "<center><h2 style='color: red'>**INCORRECT USERID OR PASSWORD**</h2></center>";
				include('login_member.php')	;											
			}
		
		?>
	</body>
</html>