<?php
    switch ($_REQUEST["acao"]){
        case 'cadastrar':
            $biblioteca = $_POST["biblioteca_id_biblioteca"];
            $atendente = $_POST["nome_atendente"];
            $sql = "INSERT INTO atendente (biblioteca_id_biblioteca, nome_atendente) VALUES ({$biblioteca}, '{$atendente}')";
            $res = $conn->query($sql) or die($conn->error);
            if($res==true){
                print "<script>alert('Adicionado com sucesso!');</script>";
                print "<script>location.href='?page=atendente-listar';</script>";
            }else{
                print "<script>alert('Não foi possível adicionar!');</script>";
                print "<script>location.href='?page=atendente-listar';</script>";
            }
            break;
        case 'editar':
            $biblioteca = $_POST["biblioteca_id_biblioteca"];
            $atendente  = $_POST["nome_atendente"];
            $sql = "UPDATE atendente SET biblioteca_id_biblioteca = {$biblioteca}, nome_atendente = '{$atendente}' WHERE id_atendente =" .$_POST["id_atendente"];
            $res = $conn->query($sql) or die($conn->error);
            if($res==true){
                print "<script>alert('Editado com sucesso!');</script>";
                print "<script>location.href='?page=atendente-listar';</script>";
            }else{
                print "<script>alert('Não foi possível editar!');</script>";
                print "<script>location.href='?page=atendente-listar';</script>";    
            }
            break;
        case 'excluir':
            $sql = "DELETE FROM atendente WHERE id_atendente =".$_REQUEST["id_atendente"];
            $res = $conn->query($sql) or die($conn->error);
            if($res==true){
                print "<script>alert('Excluído com sucesso!');</script>";
                print "<script>location.href='?page=atendente-listar';</script>";
            }else{
                print "<script>alert('Não foi possível excluir!');</script>";
                print "<script>location.href='?page=atendente-listar';</script>";    
            }
            break;
    }
?>