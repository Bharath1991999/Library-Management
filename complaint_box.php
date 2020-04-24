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
	</style>
	</head>
	<body>
		<a href="member_main_page.php" class="btn">Home</a>
		<a href='login_member.php' class="lout">Logout</a>
		<div class="bg-image"></div>
		<div class="bg-text">
			<?php
				session_start();
				if( isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1)
				{
			?>


			<style type="text/css">
				textarea {
					font-size: 15px;
					font-family: cursive;
					margin: 8px 2px;
					padding-left: 10px;
					box-sizing: border-box;
					border: 2.5px solid #ccc;
					-webkit-transition: 0.5s;
					transition: 0.5s;
					outline: none;
					border-radius: 10px;
					color: black;
					background-color: rgba(0,0,0,0.1);
				}

				textarea:focus {
					border: 3px solid #555;
					background-color: rgba(0,0,0,0.3);
				}
				@-webkit-keyframes submit {
				  100% {
				    top: -12px;
				    right: -12px;
				    bottom: -12px;
				    left: -12px;
				    opacity: 0;
				  }
				}
				@keyframes submit {
				  100% {
				    top: -12px;
				    right: -12px;
				    bottom: -12px;
				    left: -12px;
				    opacity: 0;
				  }
				}
				.submit {
				  display: inline-block;
				  width: 200px;
				  height: 40px;
				  font-size: 20px;
				  color: white;
				  font-family: courier;
				  cursor: pointer;
				  border: none;
				  border-radius: 10px;
				  background-color: #209de1;
				  vertical-align: middle;
				  -webkit-transform: perspective(1px) translateZ(0);
				  transform: perspective(1px) translateZ(0);
				  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
				  position: relative;
				}
				.submit:before {
				  content: '';
				  position: absolute;
				  border: #209de1 solid 6px;
				  border-radius: 10px;
				  top: 0;
				  right: 0;
				  bottom: 0;
				  left: 0;
				  -webkit-animation-duration: 1s;
				  animation-duration: 1s;
				}
				.submit:hover:before, .submit:focus:before, .submit:active:before {
				  -webkit-animation-name: submit;
				  animation-name: submit;
				}
			</style>
			<center>
				<form action="complaint.php"; method="POST">
					<h2>COMPLAINT</h2>
					<textarea name="complaint" cols="40" rows="5"; required='required'></textarea>
					<br><br>
					<button type="submit" class="submit">SEND</button>
				</form>
			</center>
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