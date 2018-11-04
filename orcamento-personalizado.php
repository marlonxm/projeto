<?php

	$nome       	= $_POST['nome'];
    $email        	= $_POST['email'];
    $celular		= $_POST['fone'];
    $cidade			= $_POST['cidade'];
    $atividade		= $_POST['atividade'];
    $investimento	= $_POST['invest'];
    $contato		= $_POST['tp-contato'];	 
    $orcamento		= $_POST['orcamento'];


    $servicos0		= $_POST['servicos0'];
    $servicos1		= $_POST['servicos1'];
    $servicos2		= $_POST['servicos2'];
    $servicos3		= $_POST['servicos3'];
    $servicos5		= $_POST['servicos5'];


    $mensagem		= $_POST['mensagem'];
    


	$to = "contato@mbmedia.com.br";
	$subject = "Orçamento Personalizado";

	$message = "
	<html>
	<head>
	<title>Faça um orçamento personalizado</title>

	</head>
	<body>

	<h3><strong>$nome</strong> deseja fazer um orçamento personalizado.</h3><br>	

	<p><strong>E-mail:</strong> $email </p><br>

	<p><strong>Cidade:</strong> $cidade </p><br>

	<p><strong>Ramo de Atividade:</strong> $atividade </p><br>

	<p><strong>Investimento pretendido:</strong> $investimento </p><br>

	<p><strong>Meio de resposta: </strong> $contato </p><br>

	<p><strong>Tipo de orçamento: </strong> $orcamento </p><br>

	<p><strong>Serviços pretendido(s):</strong> <br>
		$servicos0<br>
		$servicos1<br>
		$servicos2<br>
		$servicos3<br>
		$servicos5<br>
	</p>
	
	<p><strong>Mensagem:</strong> $mensagem </p>

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

 