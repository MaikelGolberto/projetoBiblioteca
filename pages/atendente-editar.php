<?php
    $sql_1 = "SELECT * FROM atendente WHERE id_atendente =".$_REQUEST["id_atendente"];
    $res_1 = $conn->query($sql_1) or die($conn->error);
    $row_1 = $res_1->fetch_object();
    print "<h1>Editar Atendente: </h1><h4>$row_1->nome_atendente</h4></h1>";
?>
<form action="?page=atendente-salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_atendente" value="<?php print $row_1->id_atendente ?>">
    <div class="mb-3">     
        <select name="biblioteca_id_biblioteca" class="form-control">
            <option>--Selecione uma biblioteca--</option>
        <?php
            $sql = "SELECT * FROM biblioteca";
            $res = $conn->query($sql) or die($conn->error);
            if($res->num_rows > 0){
                while($row = $res->fetch_object()){
                    if($row->id_biblioteca == $row_1->biblioteca_id_biblioteca){
                        print "<option value='".$row->id_biblioteca."' selected>";
                        print $row->nome_biblioteca."</option>";    
                    }else{
                        print "<option value='".$row->id_biblioteca."'>";
                        print $row->nome_biblioteca."</option>";
                    }                 
                }
            }else{
                print "Não tem biblioteca cadastrada";
            }
        ?>
        </select>
    <br>
    <div class="form-floating mb-3">    
        <input type="text" name="nome_atendente" class="form-control" id="floatingInput" placeholder=" ">
        <label for="floatingInput">Nome do Atendente</label>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-outline-dark">Salvar</button>
        <a href="?page=atendente-listar"><button type="button" class="btn btn-outline-danger">Cancelar</button></a>
    </div>
</form>