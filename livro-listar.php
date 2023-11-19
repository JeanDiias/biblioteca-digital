<h1>Lista de Livros</h1>
<?php
	$sql = "SELECT * FROM livro INNER JOIN categoria ON categoria.id_categoria = livro.categoria_id_categoria";
	$res = $conn->query($sql);
	$qtd = $res->num_rows;
	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		
		print "<th>Titulo</th>";
		print "<th>Autor</th>";
		print "<th>Categoria</th>";
		print "<th>Editora</th>";
		print "<th>Edição</th>";
		print "<th>Ano</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->titulo_livro."</td>";
			print "<td>".$row->autor_livro."</td>";
			print "<td>".$row->nome_categoria."</td>";
			print "<td>".$row->editora_livro."</td>";
			print "<td>".$row->edicao_livro."</td>";
			print "<td>".$row->ano_livro."</td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultado";
	}
?>