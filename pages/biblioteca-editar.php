<?php
    $sql = "SELECT * FROM biblioteca WHERE id_biblioteca = ".$_REQUEST["id_biblioteca"];
    $res = $conn->query($sql) or die($conn->error);
    $row = $res->fetch_object();
    print "<h1>Editar Biblioteca: <h4>$row->nome_biblioteca</h4></h1>";
?>
<form action="?page=biblioteca-salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_biblioteca" value="<?php print $row->id_biblioteca;?>">
    <div class="form-floating mb-3">
        <input type="text" name="nome_biblioteca" class="form-control" id="floatingInput" placeholder=" " value="<?php $row->nome_biblioteca;?>">
        <label for="floatingInput">Nome da Biblioteca</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="end_biblioteca" class="form-control" id="floatingInput" placeholder=" " value="<?php $row->end_biblioteca;?>">
        <label for="floatingInput">Endereço da Biblioteca</label>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-outline-dark">Salvar</button>
        <a href="?page=biblioteca-listar"><button type="button" class="btn btn-outline-danger">Cancelar</button></a>
    </div>
</form>
