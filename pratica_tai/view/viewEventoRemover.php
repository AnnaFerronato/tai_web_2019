<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<?php

include_once '../controle/controleEvento.php';

$id = $_GET['id'];

controleEvento::remover($id);

?>
