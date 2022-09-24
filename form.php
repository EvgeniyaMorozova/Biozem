<!doctype html>
<html>

	<head>
	
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>БИОЗЁМ - оформление заказа</title>

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
				margin-right: 10px;
			}


		</style>

		<!-- Custom styles for this template -->
		<link href="./css/form-validation.css" rel="stylesheet">
		<link rel="stylesheet" href="./css/main.css"/>
		
	</head>

	<?php include("tpl/connect.php");?>

	<body class="bg-light">

		<?php include("tpl/header.php");?>

		<br>

		<main>
		
		<div class="container">
			<div class="py-5 text-center">
				<h2>Оформление заказа</h2>
			</div>

				<form action="send_order.php" method="post">

					<h4 class="h-form mb-3">БИОЗЁМ универсальный</h4>

					<ul class="order">
				  
						<li class="form">
							<div class="row g-3">
								<div class="col-sm-6">
									<label class="right form-check-label" for="u5,5">5,5 л</label>
									<input type="checkbox" class="one form-check-input" name="universal_5,5" id="u5,5" style="float:right"> 
								</div>
								<div class="col-sm-6">
									<label class="left form-check-label" for="au1">Количество:</label>
									<input name="amount_u5,5" type="number" id="au1" class="two lg-input" min="0"/>
								</div>
							</div>
						</li>
					
						<li class="form">
							<div class="row g-3">
								<div class="col-sm-6">          
									<label class="right form-check-label" for="u25">25 л</label>
									<input type="checkbox" class="form-check-input" name="universal_25" id="u25" style="float:right"> 
								</div>
								<div class="col-sm-6">   
									<label class="left form-check-label" for="au2">Количество:</label>
									<input name="amount_u25" type="number" id="au2" class="lg-input" min="0"/>
								</div>
							</div>
						</li>
				  
						<li class="form">
							<div class="row g-3">
								<div class="col-sm-6">   
									<label class="right form-check-label" for="u50">50 л</label>
									<input type="checkbox" class="form-check-input" name="universal_50" id="u50" style="float:right"> 
								</div>
								<div class="col-sm-6"> 
									<label class="left form-check-label" for="au3">Количество:</label>
									<input name="amount_u50" type="number" id="au3" class="lg-input" min="0"/>
								</div>
							</div>
						</li>
					
						<li class="form">
							<div class="row g-3">
								<div class="col-sm-6">
									<label class="right form-check-label" for="un">навалом, м&#179;</label>
									<input type="checkbox" class="form-check-input" name="universal_n" id="un" style="float:right"> 
								</div>
								<div class="col-sm-6">
									<label class="left form-check-label" for="aun">Количество:</label>
									<input name="amount_un" type="number" id="aun" class="lg-input" min="0"/>
								</div>
							</div>
						</li>
				  
				    </ul>
				  
					<hr class="my-4">

					<h4 class="h-form mb-3">БИОЗЁМ для хвойных растений</h4>

					<ul class="order">
					  
							<li class="form">
								<div class="row g-3">
									<div class="col-sm-6">          
										<label class="right form-check-label" for="c5,5">5,5 л</label>
										<input type="checkbox" class="form-check-input" name="coniferous_5,5" id="c5,5" style="float:right"> 
									</div>
									<div class="col-sm-6"> 
										<label class="left form-check-label" for="ac1">Количество:</label>
										<input name="amount_c5,5" type="number" id="ac1" class="lg-input" min="0"/>
									</div>
								</div>
							</li>
						
							<li class="form">
								<div class="row g-3">
									<div class="col-sm-6">             
										<label class="right form-check-label" for="c25">25 л</label>
										<input type="checkbox" class="form-check-input" name="coniferous_25" id="c25" style="float:right"> 
									</div>
									<div class="col-sm-6">               
										<label class="left form-check-label" for="ac2">Количество:</label>
										<input name="amount_c25" type="number" id="ac2" class="lg-input" min="0"/>
									</div>
								</div>
							</li>
					  
							<li class="form">
								<div class="row g-3">
									<div class="col-sm-6">          
										<label class="right form-check-label" for="c50">50 л</label>
										<input type="checkbox" class="form-check-input" name="coniferous_50" id="c50" style="float:right"> 
									</div>
									<div class="col-sm-6">
										<label class="left form-check-label" for="ac3">Количество:</label>
										<input name="amount_c50" type="number" id="ac3" class="lg-input" min="0"/>
									</div>
								</div>
							</li>
						
							<li class="form">
								<div class="row g-3">
									<div class="col-sm-6"> 
										<label class="right form-check-label" for="cn">навалом, м&#179;</label>
										<input type="checkbox" class="form-check-input" name="coniferous_n" id="cn" style="float:right"> 
									</div>
									<div class="col-sm-6">
										<label class="left form-check-label" for="acn">Количество:</label>
										<input name="amount_cn" type="number" id="acn" class="lg-input" min="0"/>
									</div>
								</div>
							</li>
					  
					</ul>

					<hr class="my-4">

					<h4 class="h-form mb-3">КМН органическое удобрение</h4>

					<ul class="order">
					  
							<li class="form">
								<div class="row g-3">
									<div class="col-sm-6">
										<label class="right form-check-label" for="kmn50">50 л</label>
										<input type="checkbox" class="form-check-input" name="KMN_50" id="kmn50" style="float:right"> 
									</div>
									<div class="col-sm-6">
										<label class="left form-check-label" for="akmn1">Количество:</label>
										<input name="amount_kmn50" type="number" id="akmn1" class="lg-input" min="0"/>
									</div>
								</div>
							</li>
						
							<li class="form">
								<div class="row g-3">
									<div class="col-sm-6">
										<label class="right form-check-label" for="kmnn">навалом, м&#179;</label>
										<input type="checkbox" class="form-check-input" name="KMN_n" id="kmnn" style="float:right"> 
									</div>
									<div class="col-sm-6">
										<label class="left form-check-label" for="akmnn">Количество:</label>
										<input name="amount_kmnn" type="number" id="akmnn" class="lg-input" min="0"/>
									</div>
								</div>
							</li>
					  
					</ul>

					<hr class="my-4">

			<div class="row g-3" style="width: 700px; margin:auto;">
				  
					<div class="col-sm-6">
						<label for="_firstName" class="form-label">Имя</label>
						<input type="text" class="form-control" name="firstName" id="_firstName" placeholder="" value="" required>
						<div class="invalid-feedback">
							введите имя
						</div>
					</div>

					<div class="col-sm-6">
						<label for="_lastName" class="form-label">Фамилия</label>
						<input type="text" class="form-control" name="lastName" id="_lastName" placeholder="" value="" required>
						<div class="invalid-feedback">
							введите фамилию
						</div>
					</div>

					<div class="col-12">
						<label for="usertel" class="form-label">Телефон:</label>
						<input id="usertel" name="tel" placeholder="" class="form-control" required>
						<div class="invalid-feedback">
							введите телефон 
						</div>
					</div>

					<div class="col-12">
					<label for="_email" class="form-label">Email</label>
					<input type="email" class="form-control" name="email" id="_email" placeholder="you@example.com" required>
						<div class="invalid-feedback">
							введите email 
						</div>
					</div>

					<h4 class="mb-3">Способ получения</h4>

						<div class="my-3">
							<div class="form-check">
								<input type="radio" id="s" name="deliveryMethod" class="form-check-input" value="self" required>
								<label class="form-check-label" for="s">Самовывоз</label>
							</div>
							<div class="form-check">
								<input type="radio" id="d" name="deliveryMethod" class="form-check-input" value="delivery" required>
								<label class="form-check-label" for="d">Доставка</label>
							</div>
						</div>

						<div class="col-12">
						  <label for="_address" class="form-label">Адрес доставки</label>
						  <input type="text" class="form-control" name="address" id="_address" placeholder="город, индекс, улица, дом">
						</div>


					<button class="w-100 btn btn-success btn-md" type="submit">Отправить заказ</button>
				
				

			</div>

			</form>
		</div>

		</main>
	  



	<?php include("tpl/footer.php");?>

	<script src="./js/bootstrap.bundle.min.js"></script>
	<script src="./js/form-validation.js"></script>

	</body>
</html>
