<?php

	$nome       	= $_POST['nome'];
    $email        	= $_POST['email'];
    $fixo			= $_POST['telefone'];
    $celular		= $_POST['celular'];
    $empresa		= $_POST['work'];
    $atividade		= $_POST['ramo'];
    $mensagem		= $_POST['mensagem'];
    


	$to = "contato@mbmedia.com.br";
	$subject = "Formulario de Contato";

	$message = "
	<html>
	<head>
	<title>Email do Site</title>

	</head>
	<body>

	<h3><strong>$nome</strong> entrou em contato, via formulario de contato.</h3><br>	

	<p><strong>E-mail:</strong> $email </p><br>

	<p><strong>Telefone-Fixo:</strong> $fixo </p><br>

	<p><strong>Telefone-Celular:</strong> $celular </p><br>

	<p><strong>Empresa:</strong> $empresa </p><br>

	<p><strong>Ramo de Atividade:</strong> $atividade </p><br>

	<p><strong>Mensagem:</strong> $mensagem </p><br>
	

	</body>
	</html>
	";

	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	$headers .= 'From: <contato@mbmedia.com.br>' . "\r\n";


	$status = mail($to,$subject,$message,$headers);

	if ($status):
	  // Enviada com sucesso
	  header('Location:index.php?status=sucesso');
	else:
	  // Se der erro
	  header('Location:index.php?status=erro');
	endif;
?>

 