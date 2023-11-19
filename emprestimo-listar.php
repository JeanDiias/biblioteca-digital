<h1>Lista de Empréstimos</h1>
<?php
	$sql = "SELECT * FROM emprestimo INNER JOIN livro ON livro.id_livro = emprestimo.livro_id_livro 
	INNER JOIN atendente ON atendente.id_atendente = emprestimo.atendente_id_atendente
	INNER JOIN usuario ON usuario.id_usuario = emprestimo.usuario_id_usuario";
	$res = $conn->query($sql);
	$qtd = $res->num_rows;
	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>Titulo do Livro</th>";
		print "<th>Usuário</th>";
		print "<th>Atendente</th>";
		print "<th>Retirada</th>";
		print "<th>Devolução</th>";
		print "</tr>";
		while($row = $res->fetch_object()){

			print "<td>".$row->titulo_livro."</td>";
			print "<td>".$row->nome_usuario."</td>";
			print "<td>".$row->nome_atendente."</td>";
			print "<td>".$row->data_emprestimo."</td>";
			print "<td>".$row->data_devolucao."</td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultado";
	}
?>