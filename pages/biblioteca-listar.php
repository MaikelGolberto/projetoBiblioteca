<h1>Bibliotecas</h1>
<?php
    $sql = "SELECT * FROM biblioteca";
    $res = $conn->query($sql) or die($conn->error);
    $qtd = $res->num_rows;
    print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
    if($qtd > 0){
        print "<table class='table table-hover'>";
        print "<tr>";
        print "<th>Id Biblioteca</th>";
        print "<th>Nome Biblioteca</th>";
        print "<th>Endereço Biblioteca</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id_biblioteca."</td>";
            print "<td>".$row->nome_biblioteca."</td>";
            print "<td>".$row->end_biblioteca."</td>";
            print "<td><button class='btn btn-outline-dark' onclick=\"location.href='?page=biblioteca-editar&id_biblioteca=".$row->id_biblioteca."'\">Editar</button>";
            print "  <button class='btn btn-outline-danger' onclick=\"if(confirm('Tem certeza que deseja remover a biblioteca: $row->nome_biblioteca?')){location.href='?page=biblioteca-salvar&acao=excluir&id_biblioteca=".$row->id_biblioteca."'}else{false}\">Excluir</button>";
            print "</td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print "<div class='alert alert-danger'>Não há resultados</div>";
    }
?>
<div class="mb-3">
    <a href="?page=biblioteca-cadastrar"><button type="button" class="btn btn-outline-dark">Adicionar Biblioteca</button></a>
    <a href="index.php"><button type="button" class="btn btn-outline-danger">Voltar ao início</button></a>
</div>    
    