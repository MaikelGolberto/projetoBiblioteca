<h1>Editar Reserva do Aluno:</h1>
<?php  
    $sql_3 = "SELECT * FROM reserva WHERE id_reserva = ".$_REQUEST["id_reserva"];
    $res_3 = $conn->query($sql_3) or die($conn->error);
    $row_3 = $res_3->fetch_object();
?>
<form action="?page=reserva-salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_reserva" value="<?php print $row_3->id_reserva?>">
    <div class="mb-3">   
    <div class="form-floating mb-3">    
        <input type="text" name="data_emprestimo" class="form-control" id="floatingInput" placeholder=" ">
        <label for="floatingInput">Data do Emprestimo: <i>Use: ano-mês-dia</i></label>
    </div>
    <div class="form-floating mb-3">    
        <input type="text" name="data_devolucao" class="form-control" id="floatingInput" placeholder=" ">
        <label for="floatingInput">Data de Devolução: <i>Use: ano-mês-dia</i></label>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-outline-dark">Salvar</button>
        <a href="?page=reserva-listar"><button type="button" class="btn btn-outline-danger">Cancelar</button></a>
    </div>
</form>