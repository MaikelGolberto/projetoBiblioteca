<?php
    $sql = "SELECT * FROM categoria WHERE id_categoria = ".$_REQUEST["id_categoria"];
    $res = $conn->query($sql) or die($conn->error);
    $row = $res->fetch_object();
    print "<h1>Editar Categoria: <h4>$row->nome_categoria</h4></h1>";
?>
<form action="?page=categoria-salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_categoria" value="<?php print $row->id_categoria;?>">
    <div class="form-floating mb-3">
        <input type="text" name="nome_categoria" class="form-control" id="floatingInput" placeholder=" " value="<?php $row->nome_categoria;?>">
        <label for="floatingInput">Categoria</label>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-outline-dark">Salvar</button>
        <a href="?page=categoria-listar"><button type="button" class="btn btn-outline-danger">Cancelar</button></a>
    </div>
</form>