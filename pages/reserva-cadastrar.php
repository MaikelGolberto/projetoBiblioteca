<h1>Cadastrar Reserva</h1>
<form action="?page=reserva-salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">   
        <select name="atendente_id_atendente" class="form-control">
            <option>--Selecione um atendente--</option>
        <?php
            $sql = "SELECT * FROM atendente";
            $res = $conn->query($sql) or die($conn->error);
            if($res->num_rows > 0){
                while($row = $res->fetch_object()){
                    print "<option value='".$row->id_atendente."'>";
                    print $row->nome_atendente."</option>";
                }
            }else{
                print "Não tem atendente cadastrado";
            }
        ?>
        </select>
        <br>
        <select name="aluno_id_aluno" class="form-control">
            <option>--Selecione o aluno--</option>
        <?php
            $sql_1 = "SELECT * FROM aluno";
            $res_1 = $conn->query($sql_1) or die($conn->error);
            if($res_1->num_rows > 0){
                while($row_1 = $res_1->fetch_object()){
                    print "<option value='".$row_1->id_aluno."'>";
                    print $row_1->nome_aluno."</option>";
                }
            }else{
                print "Não tem aluno cadastrado";
            }
        ?>
        </select>
        <br>
        <select name="livro_id_livro" class="form-control">
            <option>--Selecione um livro--</option>
        <?php
            $sql_2 = "SELECT * FROM livro";
            $res_2 = $conn->query($sql_2) or die($conn->error);
            if($res_2->num_rows > 0){
                while($row_2 = $res_2->fetch_object()){
                    print "<option value='".$row_2->id_livro."'>";
                    print $row_2->titulo_livro."</option>";
                }
            }else{
                print "Não tem livro cadastrado";
            }
        ?>
        </select>
    <br>
    <div class="form-floating mb-3">    
        <input type="text" name="data_emprestimo" class="form-control" id="floatingInput" placeholder=" ">
        <label for="floatingInput">Data do Emprestimo: <i>Use: ano-mês-dia</i></label>
    </div>
    <div class="form-floating mb-3">    
        <input type="text" name="data_devolucao" class="form-control" id="floatingInput" placeholder=" ">
        <label for="floatingInput">Data de Devolução: <i>Use: ano-mês-dia</i></label>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-outline-dark">Cadastrar</button>
        <a href="?page=reserva-listar"><button type="button" class="btn btn-outline-danger">Cancelar</button></a>
    </div>
</form>