<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<?php

include_once '../controle/controleAluno.php';

$id = $_GET['id'];

controleAluno::remover($id);

?>
