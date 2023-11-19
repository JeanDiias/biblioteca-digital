<?php
	switch ($_REQUEST['acao']) {
		case 'cadastrar':
			$sql = "INSERT INTO usuario (nome_usuario, email_usuario, fone_usuario, cpf_usuario, dt_nasc_usuario) 
			VALUES ('".$_POST['nome_usuario']."', '".$_POST['email_usuario']."', '".$_POST['fone_usuario']."', '".$_POST['cpf_usuario']."', '".date('Y-m-d', strtotime($_POST['dt_nasc_usuario']))."')";
			
			$res = $conn->query($sql);
			
			if($res ==  true){
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='?page=usuario-listar';</script>";
			}else{
				print "<script>alert('Não cadastrou');</script>";
				print "<script>location.href='?page=usuario-listar';</script>";
			}
			break;
		
		case 'editar':
			// code...
			break;

		case 'excluir':
			// code...
			break;
	}