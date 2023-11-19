<h1>Lista de Usuários</h1>
<?php
	$sql = "SELECT * FROM usuario";
	$res = $conn->query($sql);
	$qtd = $res->num_rows;
	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>Nome</th>";
		print "<th>E-mail</th>";
		print "<th>Telefone</th>";
		print "<th>CPF</th>";
		print "<th>Data de nascimento</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->nome_usuario."</td>";
			print "<td>".$row->email_usuario."</td>";
			print "<td>".$row->fone_usuario."</td>";
			print "<td>".$row->cpf_usuario."</td>";
			print "<td>".$row->dt_nasc_usuario."</td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultado";
	}
?>