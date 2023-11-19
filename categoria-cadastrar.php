<h1>Cadastro de Categorias</h1>
<form action="?page=categoria-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Digite a Categoria:</label>
		<input type="text" name="nome_categoria" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>  