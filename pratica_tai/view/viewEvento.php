<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<?php

include_once '../controle/controleEvento.php';

?>

<html>
<head>
	<title>Eventos</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	
	<style>
		
		.button{
			background-color: #6699ff;
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			width: 100%;
		}
		
	</style>
	
</head>

<body>
	
<div class="jumbotron text-center">
  <h1>SisGer – Sistema Gerenciador de Certificados</h1>
  <h4>Eventos Cadastrados</h4>
</div>

<button type="button"class = "button"  onclick = "location.href='../view/viewEventoCadastrar.php';" ><h6>Cadastrar Novo Evento</h6></button>

<table class="table table-striped">
     <thead>
    		        <tr>
    		            <th>ID</th>
    		            <th>NOME</th>
										<th>DATA</th>
    		            <th>CARGA HORÁRIA</th>
    		            <th>RESPONSÁVEL</th>
    		            <th>AÇÕES</th>
    		        </tr>
    		    </thead>
    		    <tbody>
                <?php
								
								controleEvento::loadTabelaEventos();
								
								?>
                </tbody>
  
     </table> 


</body>

</html>
