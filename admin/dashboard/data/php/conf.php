<?php
    $id_conf = $_SESSION['user_id'];
	$conf = $pdo->prepare("SELECT * FROM `users` WHERE `id` = '$id_conf'");
    $conf->execute();

    $config = $conf->fetchObject();
    
	$name_conf = $config->name;
	$user_conf = $config->user;
	$email_conf = $config->email;
	$foto_conf = $config->photo;
    $date_conf = $config->date;

     
    if((isset($_POST['conf'])) && ($_POST['conf'] == 'Atualizar')){     
             
        $c_name = isset($_POST['name']) ? $_POST['name'] : '';
        $c_user = isset($_POST['user']) ? $_POST['user'] : '';
        $c_email = isset($_POST['email']) ? $_POST['email'] : '';
        $c_date = isset($_POST['date']) ? $_POST['date'] : '';
        $c_photo = isset($_FILES['photo']) ? $_FILES['photo'] : '';

        if($c_photo['name'] != ""){  

            unlink($con_dir.'/'.$foto_conf);

            $fotoName = $c_photo['name'];

            move_uploaded_file($c_photo['tmp_name'], ($con_dir . $fotoName));

            $c_update = $pdo->prepare("UPDATE `users` SET `name` = '$c_name', `user` = '$c_user', `email` = '$c_email', `date` = '$c_date', `photo` = '$fotoName' WHERE `id` = '$id_conf'");
        }
        else{
            $c_update = $pdo->prepare("UPDATE `users` SET `name` = '$c_name', `user` = '$c_user', `email` = '$c_email', `date` = '$c_date' WHERE `id` = '$id_conf'");
        }
        
        $c_update->execute();

        if($c_update == true){
            $c_sucess = "Usuário atualizado com sucesso.";
            echo "<meta HTTP-EQUIV='refresh' CONTENT='3;URL=./?p=conf'>";                              
        }
        else{
            $c_error = "Erro ao atualizar o usuário.";
        }
    }

    //Alterar senha

    if((isset($_POST['user_pass'])) && ($_POST['user_pass'] == 'Alterar')){     
             
        $userpass = isset($_POST['password']) ? $_POST['password'] : '';
        $userpass_v = isset($_POST['password_v']) ? $_POST['password_v'] : '';

        $passencrypt = sha1(md5($userpass));
        
        if(($userpass == $userpass_v) && ($userpass != "")){ 

            $up_pass = $pdo->prepare("UPDATE `users` SET `password` = '$passencrypt' WHERE `id` = '$id_conf'");

            $up_pass->execute();
        
            $p_suc = "Senha atualizada com sucesso.";

            echo "<meta HTTP-EQUIV='refresh' CONTENT='3;URL=./?p=conf'>";                              
        }
        else{
            $p_err = "Erro ao alterar a senha.";
            echo "<script> $(document).ready(function() { $('#bg_ch').show(); $('#changer').show();}); </script>";
        }              
        
    }
?> 
    