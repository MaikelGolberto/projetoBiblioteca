<?php
    switch($_REQUEST["acao"]){
        case 'cadastrar':
            $atendente = $_POST["atendente_id_atendente"];
            $aluno = $_POST["aluno_id_aluno"];
            $livro = $_POST["livro_id_livro"];
            $emprestimo = $_POST["data_emprestimo"];
            $devolucao = $_POST["data_devolucao"];
            $sql = "INSERT INTO reserva (atendente_id_atendente, aluno_id_aluno, livro_id_livro, data_emprestimo, data_devolucao) VALUES ('{$atendente}', '{$aluno}', '{$livro}', '{$emprestimo}', '{$devolucao}')";
            $res = $conn->query($sql) or die($conn->error);
            if($res==true){
                print "<script>alert('Cadastrado com sucesso!');</script>";
                print "<script>location.href='?page=reserva-listar';</script>";
            }else{
                print "<script>alert('Não foi possível cadastrar!');</script>";
                print "<script>location.href='?page=reserva-listar';</script>";
            }
            break;
        case 'editar':
            $emprestimo = $_POST["data_emprestimo"];
            $devolucao = $_POST["data_devolucao"];
            $sql = "UPDATE reserva SET data_emprestimo = '{$emprestimo}', data_devolucao = '{$devolucao}' WHERE id_reserva = ".$_POST["id_reserva"];
            $res = $conn->query($sql) or die($conn->error);
            if($res==true){
                print "<script>alert('Editado com sucesso!');</script>";
                print "<script>location.href='?page=reserva-listar';</script>";
            }else{
                print "<script>alert('Não foi possível editar!');</script>";
                print "<script>location.href='?page=reserva-listar';</script>";    
            }
            break;
        case 'excluir':
            $sql = "DELETE FROM reserva WHERE id_reserva =".$_REQUEST["id_reserva"];
            $res = $conn->query($sql) or die($conn->error);
            if($res==true){
                print "<script>alert('Excluído com sucesso!');</script>";
                print "<script>location.href='?page=reserva-listar';</script>";
            }else{
                print "<script>alert('Não foi possível excluir!');</script>";
                print "<script>location.href='?page=reserva-listar';</script>";    
            }
            break;
    }
?>