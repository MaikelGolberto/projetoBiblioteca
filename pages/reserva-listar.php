<h1>Reservas</h1>
<?php
    $sql = "SELECT * FROM reserva AS r INNER JOIN atendente AS a ON a.id_atendente = r.atendente_id_atendente INNER JOIN aluno AS b ON b.id_aluno = r.aluno_id_aluno INNER JOIN livro AS c ON c.id_livro = r.livro_id_livro";
    $res = $conn->query($sql) or die($conn->error);
    $qtd = $res->num_rows;
    print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
    if($qtd > 0){
        print "<table class='table table-hover'>";
        print "<tr>";
        print "<th>Id Reserva</th>";
        print "<th>Atendente</th>";
        print "<th>Aluno</th>";
        print "<th>Livro</th>";
        print "<th>Emprestimo</th>";
        print "<th>Devolução</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id_reserva."</td>";
            print "<td>".$row->nome_atendente."</td>";
            print "<td>".$row->nome_aluno."</td>";
            print "<td>".$row->titulo_livro."</td>";
            print "<td>".$row->data_emprestimo."</td>";
            print "<td>".$row->data_devolucao."</td>";
            print "<td><button class='btn btn-outline-dark' onclick=\"location.href='?page=reserva-editar&id_reserva=".$row->id_reserva."'\">Editar</button>";
            print "  <button class='btn btn-outline-danger' onclick=\"if(confirm('Tem certeza que deseja remover a reserva: $row->id_reserva?')){location.href='?page=reserva-salvar&acao=excluir&id_reserva=".$row->id_reserva."'}else{false}\">Excluir</button>";
            print "</td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print "<div class='alert alert-danger'>Não há resultados</div>";
    }
?>
<div class="mb-3">
    <a href="?page=reserva-cadastrar"><button type="button" class="btn btn-outline-dark">Cadastrar Reserva</button></a>
    <a href="index.php"><button type="button" class="btn btn-outline-danger">Voltar ao início</button></a>
</div>
