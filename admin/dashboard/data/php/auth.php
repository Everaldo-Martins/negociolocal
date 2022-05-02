<?php
    //Caso seja IE < 9 redireciona
    preg_match('/MSIE (.*?);/', $_SERVER['HTTP_USER_AGENT'], $matches);
    if(count($matches)<2){
    preg_match('/Trident\/\d{1,2}.\d{1,2}; rv:([0-9]*)/', $_SERVER['HTTP_USER_AGENT'], $matches);
    }elseif(count($matches)>1){  
    $version = $matches[1];
    switch(true){
        case ($version<=10):
        header("location: erro/");
        break;
    }
    }

    $error = "";
    $sucess = "";

    //Login form

    if((isset($_POST['sub'])) && ($_POST['sub'] == 'Entrar')){     
        // resgata variáveis do formulário
        $user = isset($_POST['user']) ? $_POST['user'] : '';
        $pass = isset($_POST['pass']) ? $_POST['pass'] : '';
            
        //Cria o hash do password
        $passwordHash = sha1(md5($pass));
            
        if((empty($user))){
            $error = "O usúario é obrigatório.";
        }
        elseif((empty($pass))){
            $error = "A senha é obrigatória.";
        }
        else{
            // inclui o arquivo de inicialização
            require_once('../essets/php/connect.php');

            //Chama a função db_connect e passa a var pdo
            $pdo = db_connect();	 
            
            $sql = $pdo->prepare("SELECT * FROM `users` WHERE `user` = :user AND `password` = :pass AND `active` = '1'");        

            $sql->bindParam(':user', $user);
            $sql->bindParam(':pass', $passwordHash);	

            $sql->execute();		
            
            $checked = $sql->fetchAll(PDO::FETCH_ASSOC);

            if (count($checked) != 1){
                $error = "Usúario ou Senha não confere.";
            }
            else{
                // pega o primeiro usuário
                $users = $checked[0];
                
                session_start();	
                
                $_SESSION['user_id'] = $users['id'];
                $_SESSION['user_name'] = $users['name'];
                $_SESSION['user_email'] = $users['email'];
                $_SESSION['user_photo'] = $users['photo'];
                $_SESSION['user_level'] = $users['level'];
                
                header('Location: dashboard/');
            }
        }      
    }
?>