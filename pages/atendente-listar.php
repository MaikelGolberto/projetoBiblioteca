<h1>Atendentes</h1>
<?php
    $sql = "SELECT * FROM atendente AS a INNER JOIN biblioteca AS b ON b.id_biblioteca = a.biblioteca_id_biblioteca";
    $res = $conn->query($sql) or die($conn->error);
    $qtd = $res->num_rows;
    print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
    if($qtd > 0){
        print "<table class='table table-hover'>";
        print "<tr>";
        print "<th>Id Atendente</th>";
        print "<th>Biblioteca</th>";
        print "<th>Nome Atendente</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id_atendente."</td>";
            print "<td>".$row->nome_biblioteca."</td>";
            print "<td>".$row->nome_atendente."</td>";
            print "<td><button class='btn btn-outline-dark' onclick=\"location.href='?page=atendente-editar&id_atendente=".$row->id_atendente."'\">Editar</button>";
            print "  <button class='btn btn-outline-danger' onclick=\"if(confirm('Tem certeza que deseja remover o atendente: $row->nome_atendente?')){location.href='?page=atendente-salvar&acao=excluir&id_atendente=".$row->id_atendente."'}else{false}\">Excluir</button>";
            print "</td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print "<div class='alert alert-danger'>Não há resultados</div>";
    }
?>
<div class="mb-3">
    <a href="?page=atendente-cadastrar"><button type="button" class="btn btn-outline-dark">Adicionar Atendente</button></a>
    <a href="index.php"><button type="button" class="btn btn-outline-danger">Voltar ao início</button></a>
</div>