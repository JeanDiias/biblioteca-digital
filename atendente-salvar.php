<?php
	switch ($_REQUEST['acao']) {
		case 'cadastrar':
			$sql = "INSERT INTO atendente (nome_atendente, cpf_atendente, email_atendente, fone_atendente) 
			VALUES ('".$_POST['nome_atendente']."','".$_POST['cpf_atendente']."','".$_POST['email_atendente']."','".$_POST['fone_atendente']."')";

			$res = $conn->query($sql);
			if($res==true){
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='?page=atendente-listar';</script>";
			}else{
				print "<script>alert('Não cadastrou');</script>";
				print "<script>location.href='?page=atendente-listar';</script>";
			}
			break;
		
		case 'editar':
			// code...
			break;

		case 'excluir':
			// code...
			break;
	}