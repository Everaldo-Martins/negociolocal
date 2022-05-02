<?php
    if((isset($_POST['team'])) && ($_POST['team'] == 'Cadastrar')){     
        
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $address = isset($_POST['address']) ? $_POST['address'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
        $mission = isset($_POST['mission']) ? $_POST['mission'] : '';
        $foto = isset($_FILES['foto']) ? $_FILES['foto'] : '';

        if((empty($name)) || (empty($address)) || (empty($email)) || (empty($phone)) || (empty($mission))){
            $team_err = "Todos os campos são obrigatórios.";
        }
        elseif(empty($foto['name'])){
            $team_err = "A foto é obrigatória.";
        }
        else{

            $fName = md5(uniqid($foto['name'], true)) . '.jpg';

            move_uploaded_file($foto['tmp_name'], ($dirTeam . $fName));

            $cad_team = $pdo->prepare("INSERT INTO `team`(`id`, `name`, `address`, `email`, `phone`, `mission`, `foto`) VALUES (DEFAULT, '$name', '$address', '$email', '$phone', '$mission', '$fName')");
            
            $cad_team->execute();

            if($cad_team == true){
                $team_suc = "Membro cadastrado com sucesso.";
            }
            else{
                $team_err = "Erro ao cadastrar membro.";
            }
        }
    }
?>