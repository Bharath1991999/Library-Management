<html>

	<?php
		session_start(); 
		session_unset(); 
		session_destroy(); 
	?>
	<head>
		<title>Login Page</title>
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
		<style type="text/css">
			.button {
	        padding: 13px 24px;
	        font-size: 34px;
	        text-align: center;
	        cursor: pointer;
	        outline: none;
	        color: #fff;
	        background-color: #4caf50;
	        border: none;
	        border-radius: 15px;
	        box-shadow: 0 9px rgba(12,12,12,0.5);
	        font-family: 	courier new;
	      }

	      .button:hover {
	        background-color: #4fbc51;
	      }

	      .button:active {
	        background-color: #4fbc51;
	        box-shadow: 0 5px rgba(6,6,6,0.2);
	        transform: translateY(4px);
	      }

	      input {
	        width: 300px;
	        height: 40px;
	        font-size: 25px;
	        font-family: calibri;
	        padding-left: 10px;
	        box-sizing: border-box;
	        border: 3px solid #ccc;
	        -webkit-transition: 0.5s;
	        transition: 0.5s;
	        outline: none;
	        border-radius: 10px;
	        background-color: rgba(0,0,0,0.1);
	      }

	      input:focus {
	        border: 3px solid #555;
	        background-color: rgba(0,0,0,0.3);
	      }

	      td {
	        font-family: cursive;
	        font-size: 30px;
	        color: #e0f0ff;
	      }

	      body, html {
	        height: 100%;
	        margin: 0;
	      }

	      h1 {
	      	font-family: cursive;
	      	font-size: 40px;
	      }

	      * {
	        box-sizing: border-box;
	      }

	      .bg-image {
	        background-image: url("cover.jpg");
	        filter: blur(8px);
	        -webkit-filter: blur(8px);
	        height: 100%; 
	        background-position: center;
	        background-repeat: no-repeat;
	        background-size: cover;
	      }

	      .bg-text {
	        background-color: rgb(0,0,0);
	        background-color: rgba(0,0,0, 0.4);
	        color: white;
	        font-weight: bold;
	        border: 3px solid #878787;
	        border-radius: 5px;
	        position: absolute;
	        top: 48%;
	        left: 50%;
	        transform: translate(-50%, -50%);
	        z-index: 2;
	        width: 50%;
	        padding: 20px;
	        text-align: center;
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
        <a href="index.html" class="btn"><span>Home</span></a>
		<form action="login_member_check.php"; method="POST">
			<div class="bg-image"></div>			
			<div class="bg-text">
				<h1>Login</h1><hr style="border-color: #878787"><br>
				<table align="center" cellpadding="4">
					<tr>
						<td>Login ID</td>
						<td><input type="text" name="member_id" required="required"></td>
					</tr>
					<tr>
						<td> </td>							
						<td> </td>
					</tr>
					<tr>
						<td> </td>
						<td> </td>
					</tr>
					<tr>
						<td>Password</td>					
						<td><input type="password" name="password" required="required"></td>
					</tr>
				</table>
				<br><br><br>
				<center><button type="submit" class="button">Login</button></center>
			</div>
		</form>		
	</body>
</html>