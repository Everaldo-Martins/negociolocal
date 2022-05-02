<?php

	$error = "";
	$sucess = "";
	
	session_start();
	
	$lmail = 'contato@negociolocal.org';
	
	$v1 = rand(1,6);
	$v2 = rand(2,3);
	$v3 = rand(2,4);
	
	$SESSION = $v3*($v1+$v2);	
	
	if((isset($_POST['contact'])) && ($_POST['contact'] == 'Enviar')){  		
		
		$name = $_POST['name'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];		
		$subject = $_POST['subject'];	
		$mensage = $_POST['mensage'];	
		$result = $_POST['result'];
		$hidden = $_POST['hidden'];	
		
		if(empty($name) && empty($email) && empty($phone) && empty($assunto) && empty($mensagem) && empty($result)){
			$error = "Por favor preecha todos os campos com (*)";
		}
		elseif($result != $hidden){
			$error = "O valor informado, não está correto!";
		}
		else{
			//send the email
			$to = $lmail;
			$from = $email;
			$ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
			
			$body = "Olá! você tem uma mensagem de $subject: \n \n \n".
			"Nome: $name \n".
			"Endereço: $address \n".
			"E-mail: $email \n".
			"Telefone: $phone \n".			
			"Assunto: $subject \n".
			"Mensagem: \n".
			"$mensage \n \n".		
			"IP: $ip \n";	
			
			$headers .= 'charset=utf-8' . "\r\n";
			$headers = "From: $from \r\n";
			
			mail($to, $subject, $body, $headers);
			
			$sucess = "Mensagem enviada com sucesso!";
		}
	}
	
	session_destroy();

?>