<h1>Cadastro de Empréstimos</h1>
<form action="?page=emprestimo-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label for="livro">Livros:</label>
		<select class="form-control" id="livro" name="livro_id_livro">
			<?php 
				$sql = "SELECT * FROM livro";
				$livros = $conn->query($sql);
				while($row = $livros->fetch_object()){
					print "<option value=".$row->id_livro.">".$row->titulo_livro."</option>";
				}
				
			?>
		</select>
	</div>
	<div class="mb-3">
		<label for="usuario">Usuários:</label>
		<select class="form-control" id="usuario" name="usuario_id_usuario">
			<?php 
				$sql = "SELECT * FROM usuario";
				$usuario = $conn->query($sql);
				while($row = $usuario->fetch_object()){
					print "<option value=".$row->id_usuario.">".$row->nome_usuario."</option>";
				}
				
			?>
		</select>
	</div>
	<div class="mb-3">
		<label for="atendente">Atendente:</label>
		<select class="form-control" id="atendente" name="atendente_id_atendente">
			<?php 
				$sql = "SELECT * FROM atendente";
				$atendente = $conn->query($sql);
				while($row = $atendente->fetch_object()){
					print "<option value=".$row->id_atendente.">".$row->nome_atendente."</option>";
				}
				
			?>
		</select>
	</div>
	<div class="mb-3">
		<label>Data da Retirada:</label>
		<input type="date" name="data_emprestimo" class="form-control">
	</div>
	<div class="mb-3">
		<label>Data da Devolução:</label>
		<input type="date" name="data_devolucao" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>