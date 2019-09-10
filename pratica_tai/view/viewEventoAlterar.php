<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<?php
 
 include_once '../controle/controleEvento.php';
 
    if( !empty($_POST['form_submit']) ) {
        controleEvento::confirmar();
    }
	
?>



<html>
<head>
	<title>Alterar Evento</title>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	
		<style>
		
		.button1{
			background-color: #33cc33;
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			width: 45%;
		}
		
		.button2{
			background-color: #6699ff;
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			width: 45%;
		}
		
	</style>
	
</head>

<body>
	
	<div class="jumbotron text-center">
		
	<h1>Alterar Evento</h1>

 
	</div>
	
	<form class= form method=POST action="viewEventoAlterar.php">
		<input type='hidden' name='form_submit' value='OK'/>
		<?php
			if(isset($_GET['id'])){
			$id = $_GET['id'];
    
			} 
		?>

		<input type='hidden' name='id' value= '<?php echo $id ?>'/>
		
			
		<div class="form-group">
			
			
			<label for="nome">Nome:</label>
			<input type="text" class="form-control" id="nome" placeholder="Digite o nome" name="nome">
			
		</div>
	
		 <div class="form-group">
		
			<label for="data">Data:</label>
			<input type="date" class="form-control" id="data" placeholder="Digite a data" name="data">
	  
		</div>
	
		<div class="form-group">
		
			<label for="cah">Carga Horária:</label>
			<input type="number" class="form-control" id="cah" placeholder="Digite a carga horária" name="cah">
	  
		</div>
		
		<div class="form-group">
		
			<label for="resp">Responsável:</label>
			<input type="text" class="form-control" id="resp" placeholder="Digite o nome do responsável" name="resp">
	  
		</div>
	
		<div>
		
			<button type="submit" class = "button1" ><h6>Confirmar</h6></button>
		
			<button type="button" onclick = "location.href='../view/viewEvento.php';" class="button2"><h6>Voltar sem salvar</h6></button>
		
		</div>
	
	</form>
	
</body>
</html>