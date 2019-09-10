<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<?php
include_once '../modelo/modeloEvento.php';

class controleEvento
{
    public static function index()
    {
        echo "<script>window.location='../view/viewEventoCadastrar.php'</script>";
    }
    public static function remover($id)
    {
        $evento = modeloEvento::findEvento($id);
        if (empty($evento)) {
            echo "<script>alert('O ID informado para o evento não existe!')</script>";
            echo "<script>window.location='viewEvento.php'</script>";
        } else {
            modeloEvento ::delEvento ($id);
            echo "<script>alert('Registro removido com sucesso!')</script>";
            echo "<script>window.location='viewEvento.php'</script>";
        }
    }
    public static function confirmar()
    {
       
        
        if (
            $_POST['nome'] != "" && $_POST['data'] != ""
            && $_POST['cah'] != ""  && $_POST['resp'] != ""
           ) {
            
            
            
            // Inserir
            if (empty($_POST['id'])) {
                
                $dados_evento = array(
                    "nome" => $_POST['nome'],
                    "data" => $_POST['data'],
                    "carga_horaria" => $_POST['cah'],
                    "responsavel" => $_POST['resp']
                );
                
           
                modeloEvento::addEvento($dados_evento);
                echo "<script>alert('Registro inserido com sucesso!')</script>";
            } else { // Alterar
                
                $dados_evento = array(
                    "id" => $_POST['id'],
                    "nome" => $_POST['nome'],
                    "data" => $_POST['data'],
                    "carga_horaria" => $_POST['cah'],
                    "responsavel" => $_POST['resp']
                );
    
                modeloEvento::upEvento($dados_evento);
                echo "<script>alert('Registro alterado com sucesso!')</script>";
            }
            echo "<script>window.location='../view/viewEvento.php'</script>";
        }
    }
    public static function loadTabelaEventos()
    {
        $evento = modeloEvento::getEventos();
        while ($objEvento = $evento->fetchObject()) {
            echo "<tr>";
            echo "<td>" . $objEvento->id . "</td>";
            echo "<td>" . $objEvento->nome . "</td>";
            echo "<td>" . $objEvento->data. "</td>";
            echo "<td>" . $objEvento->carga_horaria . "</td>";
            echo "<td>" . $objEvento->responsavel . "</td>";
            echo "<td>";
            echo "<a href='viewEventoAlterar.php?id=$objEvento->id' class='btn btn-info glyphicon glyphicon-pencil' role='button'>Alterar</a>";
            echo "<a href='viewEventoRemover.php?id=$objEvento->id' class='btn btn-danger glyphicon glyphicon-remove' role='button'>Excluir</a>";
            echo "</td>";
            echo "</tr>";
        }
    }
}