<?php
$json = file_get_contents("https://www.themealdb.com/api/json/v1/1/search.php?s=");
$receitas = json_decode($json);

$total = count($receitas->meals);
?>
<!doctype html>
<html lang="pt-br">
  <head>
  	<title>Table 08</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-4">
					<h2 class="heading-section">Receitas</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h3 class="h5 mb-4 text-center">Lista de receitas</h3>
					<div class="table-wrap">
						<table class="table myaccordion table-hover" id="accordion">
						  <thead>
						    <tr>
						      <th>#</th>
						      <th>Imagem</th>
						      <th>Título</th>
						      <th>Categoria</th>
						      <th>Área</th>
						      <th>&nbsp;</th>
						    </tr>
						  </thead>
						  <tbody>
							<?php foreach ($receitas->meals as $key => $value) {?>
						    <tr data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						      <th scope="row"><?php echo $value->idMeal; ?></th>
							  <td><img src="<?php echo $value->strMealThumb; ?>" width="100" alt=""></td>
						      <td><?php echo $value->strMeal; ?></td>
						      <td><?php echo $value->strCategory; ?></td>
						      <td><?php echo $value->strArea; ?></td>
						      <td>
						      	<i class="fa" aria-hidden="true"></i>
				        	</td>
						    </tr>
						    <tr>
						    	<td colspan="6" id="collapseOne" class="collapse show acc" data-parent="#accordion">
						    		<p><?php echo $value->strInstructions; ?></p>
						    	</td>
						    </tr>

						    <?php }?>
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

