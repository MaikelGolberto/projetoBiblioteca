<h1>Alunos</h1>
<?php
    $sql = "SELECT * FROM aluno";
    $res = $conn->query($sql) or die($conn->error);
    $qtd = $res->num_rows;
    print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
    if($qtd > 0){
        print "<table class='table table-hover'>";
        print "<tr>";
        print "<th>Id Aluno</th>";
        print "<th>Nome Aluno</th>";
        print "<th>Endereço Aluno</th>";
        print "<th>Email Aluno</th>";
        print "<th>Telefone Aluno</th>";
        print "<th>Data de Nascimento</th>";
        print "<th>Genero Aluno</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id_aluno."</td>";
            print "<td>".$row->nome_aluno."</td>";
            print "<td>".$row->end_aluno."</td>";
            print "<td>".$row->email_aluno."</td>";
            print "<td>".$row->fone_aluno."</td>";
            print "<td>".$row->data_nasc_aluno."</td>";
            print "<td>".$row->genero_aluno."</td>";
            print "<td><button class='btn btn-outline-dark' onclick=\"location.href='?page=usuario-editar&id_aluno=".$row->id_aluno."'\">Editar</button>";
            print "  <button class='btn btn-outline-danger' onclick=\"if(confirm('Tem certeza que deseja remover o aluno: $row->nome_aluno?')){location.href='?page=usuario-salvar&acao=excluir&id_aluno=".$row->id_aluno."'}else{false}\">Excluir</button>";
            print "</td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print "<div class='alert alert-danger'>Não há resultados</div>";
    }
?>
<div class="mb-3">
    <a href="?page=usuario-cadastrar"><button type="button" class="btn btn-outline-dark">Adicionar Aluno</button></a>
    <a href="index.php"><button type="button" class="btn btn-outline-danger">Voltar ao início</button></a>
</div> 