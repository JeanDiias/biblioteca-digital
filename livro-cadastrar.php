<h1>Cadastro de Livros</h1>
<form action="?page=livro-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Titulo do livro:</label>
		<input type="text" name="titulo_livro" class="form-control">
	</div>
	<div class="mb-3">
		<label>Autor:</label>
		<input type="text" name="autor_livro" class="form-control">
	</div>

	<div class="mb-3">
		<label for="categorias">Categoria:</label>
		<select class="form-control" id="categorias" name="categoria_id_categoria">
			<?php 
				$sql = "SELECT * FROM categoria";
				$categories = $conn->query($sql);
				while($row = $categories->fetch_object()){
					print "<option value=".$row->id_categoria.">".$row->nome_categoria."</option>";
				}
				
			?>
		</select>
	</div>

	<div class="mb-3">
		<label>Editora:</label>
		<input type="text" name="editora_livro" class="form-control">
	</div>
	<div class="mb-3">
		<label>Edição do Livro:</label>
		<input type="text" name="edicao_livro" class="form-control">
	</div>

	</div>
	<div class="mb-3">
		<label>Data de Lançamento:</label>
		<input type="date" name="ano_livro" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>