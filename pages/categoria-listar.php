<h1>Categorias</h1>
<?php
    $sql = "SELECT * FROM categoria";
    $res = $conn->query($sql) or die($conn->error);
    $qtd = $res->num_rows;
    print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
    if($qtd > 0){
        print "<table class='table table-hover'>";
        print "<tr>";
        print "<th>Id Categoria</th>";
        print "<th>Categoria</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id_categoria."</td>";
            print "<td>".$row->nome_categoria."</td>";
            print "<td><button class='btn btn-outline-dark' onclick=\"location.href='?page=categoria-editar&id_categoria=".$row->id_categoria."'\">Editar</button>";
            print "  <button class='btn btn-outline-danger' onclick=\"if(confirm('Tem certeza que deseja remover a categoria: $row->nome_categoria?')){location.href='?page=categoria-salvar&acao=excluir&id_categoria=".$row->id_categoria."'}else{false}\">Excluir</button>";
            print "</td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print "<div class='alert alert-danger'>Não há resultados</div>";
    }
?>
<div class="mb-3">
    <a href="?page=categoria-cadastrar"><button type="button" class="btn btn-outline-dark">Adicionar Categoria</button></a>
    <a href="index.php"><button type="button" class="btn btn-outline-danger">Voltar ao início</button></a>
</div>