<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		.txt{
			color: white;
			margin-left: 200px;
		}
		.header{
			height: 80px;
			background: #212529; 
		}
		.footer{
			height: 130px;
			background: #212529; 
		}
		.back{
			height: 1000px;
		}
		.txtcolor{
			color: white;
		}
		.pricecolor{
			color: #3bfc00;
		}
		.mt-10{
			margin-top: 100px;
		}
		.mb-10{
			margin-bottom: 100px;
		}
		.prodh{
			height: 200px;
		}
		.gl{
			height: 500px;
		}
	</style>
</head>
<body>
	<div style="background-image: url(img/prog.jpg);" class="back">
		<div class=" col-12 pr-0 pl-0 gl">
	<div class="col-12 d-flex header" >
		
		<div class="col-1 ">
			<img src="img/cpu.png" class="w-100 col-12">
		</div>
		<h5 class="txt">Высокое качество</h5>
		<h5 class="txt">Любимые товары</h5>
		<h5 class="txt">Личная подборка</h5>
		<h5 class="txt">Корзина</h5>
	</div>
		<?php 
			$connect = mysqli_connect("127.0.0.1","root","","phpproject"); 
			$text_zaprosa = "SELECT * FROM items";
			$zapros = mysqli_query($connect,$text_zaprosa);

			$stroka1 = $zapros->fetch_assoc();
			$stroka2 = $zapros->fetch_assoc();
			$stroka3 = $zapros->fetch_assoc();
			$stroka4 = $zapros->fetch_assoc();
			$stroka5 = $zapros->fetch_assoc();
			$stroka6 = $zapros->fetch_assoc();
		 ?>
		<div class="col-12">
			
			<div class="col-9 d-flex mx-auto mt-10">
				<!--1 товар-->
				<div class="col-4 prodh" ><!--divs for title,img,dicrip,price-->
					<h5 class="txtcolor">
						<?php  
							echo $stroka1["title"]
						?>
					</h5>
					<?php 
						echo "<img class = 'w-50 rounded-lg col-12'src = '" . $stroka1["img"] . "'>";
					?>
					<p class="txtcolor">
						<?php 
							echo $stroka1["descrip"]
					 	?>
					</p>
					<h5 class="pricecolor">
						<?php 
							echo $stroka1["price"]
						 ?>
					</h5>
					<button class="btn btn-warning">Купить</button>									
				</div>
				<!--2 товар-->
				<div class="col-4 prodh"><!--divs for title,img,dicrip,price-->
					<h5 class="txtcolor">
						<?php  
							echo $stroka2["title"]
						?>
					</h5>
					<?php 
						echo "<img class = 'w-50 rounded-lg col-12'src = '" . $stroka2["img"] . "'>";
					?>
					<p class="txtcolor">
						<?php 
							echo $stroka2["descrip"]
					 	?>
					</p>
					<h5 class="pricecolor">
						<?php 
							echo $stroka2["price"]
						 ?>
					</h5>
					<button class="btn btn-warning">Купить</button>
					
													
				</div>
				<!--3 товар-->
				<div class="col-4 prodh"><!--divs for title,img,dicrip,price-->
					<h5 class="txtcolor">
						<?php  
							echo $stroka3["title"]
						?>
					</h5>
					<?php 
						echo "<img class = 'w-25 rounded-lg col-12'src = '" . $stroka3["img"] . "'>";
					?>
					<p class="txtcolor">
						<?php 
							echo $stroka3["descrip"]
					 	?>
					</p>
					<h5 class="pricecolor">
						<?php 
							echo $stroka3["price"]
						 ?>
					</h5>
					<button class="btn btn-warning">Купить</button>
					
													
				</div>
			</div>
			<div class="col-9 d-flex mx-auto mt-10">
					<!--4 товар-->
				<div class="col-4 prodh " ><!--divs for title,img,dicrip,price-->
					<h5 class="txtcolor">
						<?php  
							echo $stroka4["title"]
						?>
					</h5>
					<?php 
						echo "<img class = 'w-50 rounded-lg col-12'src = '" . $stroka4["img"] . "'>";
					?>
					<p class="txtcolor">
						<?php 
							echo $stroka4["descrip"]
					 	?>
					</p>
					<h5 class="pricecolor">
						<?php 
							echo $stroka4["price"]
						 ?>
					</h5>
					<button class="btn btn-warning">Купить</button>
					
													
				</div>
				<!--5 товар-->
				<div class="col-4 prodh"><!--divs for title,img,dicrip,price-->
					<h5 class="txtcolor">
						<?php  
							echo $stroka5["title"]
						?>
					</h5>
					<?php 
						echo "<img class = 'w-75 rounded-lg'src = '" . $stroka5["img"] . "'>";
					?>
					<p class="txtcolor">
						<?php 
							echo $stroka5["descrip"]
					 	?>
					</p>
					<h5 class="pricecolor">
						<?php 
							echo $stroka5["price"]
						 ?>
					</h5>
					<button class="btn btn-warning">Купить</button>
					
													
				</div>
				<div class="col-4 prodh"><!--divs for title,img,dicrip,price-->
					<h5 class="txtcolor">
						<?php  
							echo $stroka6["title"]
						?>
					</h5>
					<?php 
						echo "<img class = 'w-75 rounded-lg col-12'src = '" . $stroka6["img"] . "'>";
					?>
					<p class="txtcolor">
						<?php 
							echo $stroka6["descrip"]
					 	?>
					</p>
					<h5 class="pricecolor">
						<?php 
							echo $stroka6["price"]
						 ?>
					</h5>
					<button class="btn btn-warning">Купить</button>
					
													
				</div>
			</div>

			
		</div>

		
	</div>
	</div>

	
<div class="col-12 footer">
	<h5 class="txtcolor">prod.by Vlad P</h5>
	<h5 class="txtcolor">IT Park, Illarionov School</h5>
	<h5 class="txtcolor">22.10.2020</h5>
	<h5>
		<a href="admin.php" class="txtcolor">Админ панель</a>
	</h5>
</div>
</body>

</html>