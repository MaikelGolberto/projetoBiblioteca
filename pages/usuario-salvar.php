<?php
    switch($_REQUEST["acao"]){
        case 'cadastrar':
            $nome = $_POST["nome_aluno"];
            $end = $_POST["end_aluno"];
            $email = $_POST["email_aluno"];
            $fone = $_POST["fone_aluno"];
            $nasc = $_POST["data_nasc_aluno"];
            $genero = $_POST["genero_aluno"];
            $sql = "INSERT INTO aluno (nome_aluno, end_aluno, email_aluno, fone_aluno, data_nasc_aluno, genero_aluno) VALUES ('{$nome}', '{$end}', '{$email}', '{$fone}', '{$nasc}', '{$genero}')";
            $res = $conn->query($sql) or die($conn->error);
            if($res==true){
                print "<script>alert('Adicionado com sucesso');</script>";
                print "<script>location.href='?page=usuario-listar';</script>";
            }else{
                print "<script>alert('Não foi possível adicionar');</script>";
                print "<script>location.href='?page=usuario-listar';</script>";
            }
            break;
        case 'editar':
            $nome = $_POST["nome_aluno"];
            $end = $_POST["end_aluno"];
            $email = $_POST["email_aluno"];
            $fone = $_POST["fone_aluno"];
            $nasc = $_POST["data_nasc_aluno"];
            $genero = $_POST["genero_aluno"];
            $sql = "UPDATE aluno SET nome_aluno = '{$nome}', end_aluno = '{$end}', email_aluno = '{$email}', fone_aluno = '{$fone}', data_nasc_aluno = '{$nasc}', genero_aluno = '{$genero}' WHERE id_aluno =".$_POST["id_aluno"];
            $res = $conn->query($sql) or die($conn->error);
            if($res==true){
                print "<script>alert('Editado com sucesso!');</script>";
                print "<script>location.href='?page=usuario-listar';</script>";
            }else{
                print "<script>alert('Não foi possível editar!');</script>";
                print "<script>location.href='?page=usuario-listar';</script>";  
            }
            break;
        case 'excluir':
            $sql = "DELETE FROM aluno WHERE id_aluno =".$_REQUEST["id_aluno"];
            $res = $conn->query($sql) or die($conn->error);
            if($res==true){
                print "<script>alert('Excluído com sucesso!');</script>";
                print "<script>location.href='?page=usuario-listar';</script>";
            }else{
                print "<script>alert('Não foi possível excluir!');</script>";
                print "<script>location.href='?page=usuario-listar';</script>";    
            }
            break;
    }
?>