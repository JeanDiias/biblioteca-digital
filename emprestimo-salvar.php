<?php
	switch ($_REQUEST['acao']) {
		case 'cadastrar':
			$sql = "INSERT INTO emprestimo (livro_id_livro, usuario_id_usuario, atendente_id_atendente, data_emprestimo, data_devolucao)
			VALUES ('".$_POST['livro_id_livro']."', '".$_POST['usuario_id_usuario']."', '".$_POST['atendente_id_atendente']."', '".date('Y-m-d', strtotime($_POST['data_emprestimo']))."', '".date('Y-m-d', strtotime($_POST['data_devolucao']))."')";

			$res = $conn->query($sql);
			if($res==true){
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='?page=emprestimo-listar';</script>";
			}else{
				print "<script>alert('Não cadastrou');</script>";
				print "<script>location.href='?page=emprestimo-listar';</script>";
			}
			break;
		
		case 'editar':
			// code...
			break;

		case 'excluir':
			// code...
			break;
	}