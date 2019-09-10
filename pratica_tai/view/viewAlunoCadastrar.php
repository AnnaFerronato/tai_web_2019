<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<?php

 include_once '../controle/controleAluno.php';
 
    if( !empty($_POST['form_submit']) ) {
        controleAluno::confirmar();
    }
	

?>

<html>
<head>
	<title>Cadastrar Aluno</title>
	
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
		
	<h1>Cadastrar Novo Aluno</h1>
 
	</div>
	
	<form class = form method=POST action="viewAlunoCadastrar.php">
  
  <input type='hidden' name='form_submit' value='OK' /> 
		<div class="form-group">
			
			<label for="nome">Nome:</label>
			<input type="text" class="form-control" id="nome" placeholder="Digite o nome" name="nome">
			
		</div>
	
		 <div class="form-group">
		
			<label for="curso">Curso:</label>
			<input type="text" class="form-control" id="curso" placeholder="Digite o curso" name="curso">
	  
		</div>
	
		<div class="form-group">
		
			<label for="turma">Turma:</label>
			<input type="text" class="form-control" id="turma" placeholder="Digite a turma" name="turma">
	  
		</div>
	
		<div>
		
			<button type="submit" class = "button1" ><h6>Confirmar</h6></button>
		
			<button type="button" onclick = "location.href='../view/viewAluno.php';" class="button2"><h6>Voltar sem salvar</h6></button>
		
		</div>
	
	</form>
	
</body>
</html>
