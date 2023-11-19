<?php
	switch ($_REQUEST['acao']) {
		case 'cadastrar':
			$sql = "INSERT INTO livro (titulo_livro, categoria_id_categoria, autor_livro, editora_livro, edicao_livro, localidade_livro, ano_livro) 
			VALUES ('".$_POST['titulo_livro']."', ".$_POST['categoria_id_categoria'].", '".$_POST['autor_livro']."', '".$_POST['editora_livro']."', '".$_POST['edicao_livro']."', '".$_POST['localidade_livro']."', '".$_POST['ano_livro']."')";
			$res = $conn->query($sql);
			if($res==true){
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='?page=livro-listar';</script>";
			}else{
				print "<script>alert('Não cadastrou');</script>";
				print "<script>location.href='?page=livro-listar';</script>";
			}
			break;
		
		case 'editar':
			// code...
			break;

		case 'excluir':
			// code...
			break;
	}