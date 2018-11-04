<?php

	$nome       	= $_POST['news-name'];
    $email        	= $_POST['news-email'];
    $whats			= $_POST['news-whats'];
    


	$to = "contato@mbmedia.com.br";
	$subject = "Newsletter - Promoções e Novidades";

	$message = "
	<html>
	<head>
	<title>Email do Site</title>

	</head>
	<body>

	<h3><strong>$nome</strong> deseja receber promoções e novidade via email e WhatsApp</h3><br>

	

	<p><strong>E-mail:</strong> $email </p><br>


	<p><strong>WhatsApp:</strong> $whats </p>

	

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

 