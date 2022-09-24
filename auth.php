<!doctype html>
<html>

	<head>
	
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>БИОЗЁМ - авторизация</title>

		<!-- Bootstrap core CSS -->
		<link href="./css/bootstrap.min.css" rel="stylesheet">

		<style>

			.h-form {
				text-align: center;
			}
			
			.order {
				text-align: center;
				margin: auto;
				list-style-type:none;
			}
				 
			.form {
				margin-bottom: 20px;
			}      
			
			.right {
				margin-right: 10px;
			}
			.left {
				//margin-left: 30px;
				margin-right: 10px;
			}
			
			.wrongpass {
				
				 width: 300px; 
				 margin:auto;
				 text-align: center;
				 color: red;
			}

	   </style>

		<!-- Custom styles for this template -->
		<link href="./css/form-validation.css" rel="stylesheet">
		<link rel="stylesheet" href="./css/main.css"/>
		
	</head>

	<?php include("tpl/connect.php");?>

	<body class="bg-light">

    <?php include("tpl/header.php");?>

	</br>

		<main>

			<h4 class="h-form mb-3" style="margin-top:140px;">Введите пароль</h4>
			   
				<form method="post">
					<div class="row g-3" style="width: 300px; margin:auto;">
						<input type="password" class="form-control" name="password" required>
						<input type="submit" class="w-100 btn btn-success btn-md"/>
					</div>
				</form>

			<?php
			 
				//print_r($_POST);
				 
				error_reporting(E_ALL & ~E_NOTICE);
				$password = $_POST['password'];

				if(isset($password)) {
				  
							if ($password == '123456') { header ('location: tpl/add_product.php'); }
							   
							else { echo '<div class="wrongpass col-sm-6">неправильный пароль!</div>'; }
				}
			  

			?>
					
		</main>

	</body>
</html>
