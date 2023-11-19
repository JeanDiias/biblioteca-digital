<h1>Cadastro de Usuários</h1>
<form action="?page=usuario-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome do Usuário:</label>
		<input type="text" name="nome_usuario" class="form-control">
	</div>
	<div class="mb-3">
		<label>E-mail do Usuário:</label>
		<input type="text" name="email_usuario" class="form-control">
	</div>
	<div class="mb-3">
		<label>Telefone do Usuário:</label>
		<input type="text" name="fone_usuario" class="form-control">
	</div>
	<div class="mb-3">
		<label>CPF do Usuário:</label>
		<input type="text" name="cpf_usuario" class="form-control">
	</div>
	<div class="mb-3">
		<label>Data de Nascimento:</label>
		<input type="date" name="dt_nasc_usuario" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>