<h1>Livros</h1>
<?php
    $sql = "SELECT * FROM livro AS a INNER JOIN categoria AS b ON b.id_categoria = a.categoria_id_categoria";
    $res = $conn->query($sql) or die($conn->error);
    $qtd = $res->num_rows;
    print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
    if($qtd > 0){
        print "<table class='table table-hover'>";
        print "<tr>";
        print "<th>Id Livro</th>";
        print "<th>Categoria</th>";
        print "<th>Titulo Livro</th>";
        print "<th>Autor Livro</th>";
        print "<th>Editora Livro</th>";
        print "<th>Edição Livro</th>";
        print "<th>Ano Livro</th>";
        print "<th>Localidade Livro</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id_livro."</td>";
            print "<td>".$row->nome_categoria."</td>";
            print "<td>".$row->titulo_livro."</td>";
            print "<td>".$row->autor_livro."</td>";
            print "<td>".$row->editora_livro."</td>";
            print "<td>".$row->edicao_livro."</td>";
            print "<td>".$row->ano_livro."</td>";
            print "<td>".$row->localidade_livro."</td>";
            print "<td><button class='btn btn-outline-dark' onclick=\"location.href='?page=livro-editar&id_livro=".$row->id_livro."'\">Editar</button>";
            print "  <button class='btn btn-outline-danger' onclick=\"if(confirm('Tem certeza que deseja remover o livro: $row->titulo_livro?')){location.href='?page=livro-salvar&acao=excluir&id_livro=".$row->id_livro."'}else{false}\">Excluir</button>";
            print "</td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print "<div class='alert alert-danger'>Não há resultados</div>";
    }
?>
<div class="mb-3">
    <a href="?page=livro-cadastrar"><button type="button" class="btn btn-outline-dark">Adicionar Livro</button></a>
    <a href="index.php"><button type="button" class="btn btn-outline-danger">Voltar ao início</button></a>
</div>