<!doctype html>
<html>

	<head>

	<meta charset="utf8"/>
		<style>

		select, input {
			box-sizing: border-box;
			height: 30px;

		}

		</style>

	</head>

	<body>

	<?php
	include("connect.php");
	error_reporting(E_ALL & ~E_NOTICE);
	$query = 'select * from products';                 //products
	$products = mysqli_query($link,$query);
	$products_array = mysqli_fetch_all($products,MYSQLI_ASSOC);

		echo '<div class="container marketing"> <div class="row">';
		
			foreach($products_array as $product) 
			{
		
			   $res.='<option value="'.$product['product_id'].'" >'.$product['product_name'].$product['product_description'].'</option>';
			  
			}

			
	?>
		  
		<form method="post" enctype="multipart/form-data">
			<select name="choice" required>
				<?php echo '<option value="" disabled selected>Выберите категорию</option>'.$res; ?>
			</select>
			<input type="text" name="name" placeholder="введите название" required/>
			<input type="text" name="price" placeholder="введите цену" required/>
			<input type="file" name="image" required/>
			<input type="submit">
		</form>

	<?php

	$choice = $_POST['choice'];
	$name = $_POST['name'];
	$price = $_POST['price'];

	$tmp_path= $_FILES['image']['tmp_name']; // временное имя файла (путь)
	$img_name=$_FILES['image']['name'];

	$path = "img/".$img_name; 


	$query_insert = 'insert into sub_products (sub_product_name, sub_product_price, product_id, sub_product_img) values ("'.$name.'","'.$price.'","'.$choice.'","'.$path.'")';

	$insert_product_query = mysqli_query( $link, $query_insert);

	//echo mysqli_error($link);

	$folder = "../img/";

	if ( $insert_product_query==true)  {
		
		echo 'Данные загружены';
		
		move_uploaded_file( $tmp_path,  $folder.$img_name  );

	}


	?>

	</body>
</html>