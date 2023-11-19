<h1>Cadastro de Atendentes</h1>
<form action="?page=atendente-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome do(a) Atendente:</label>
		<input type="text" name="nome_atendente" class="form-control">
	</div>
	<div class="mb-3">
		<label>CPF do(a) Atendente:</label>
		<input type="text" name="cpf_atendente" class="form-control">
	</div>
	<div class="mb-3">
		<label>E-mail do(a) Atendente:</label>
		<input type="text" name="email_atendente" class="form-control">
	</div>
	<div class="mb-3">
		<label>Telefone do(a) Atendente:</label>
		<input type="text" name="fone_atendente" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>