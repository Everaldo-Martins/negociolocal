<?php
    if((isset($_POST['cad'])) && ($_POST['cad'] == 'Cadastrar')){     
        
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $category = NULL;
        $address = isset($_POST['address']) ? $_POST['address'] : '';
        $attendance = isset($_POST['attendance']) ? $_POST['attendance'] : '';
        $contact = isset($_POST['contact']) ? $_POST['contact'] : '';
        $link = isset($_POST['link']) ? $_POST['link'] : '';
        $logo = isset($_FILES['logo']) ? $_FILES['logo'] : '';

        if((empty($name)) || (empty($address)) || (empty($attendance)) || (empty($contact)) || (empty($link))){
            $error = "Todos os campos são obrigatórios.";
        }
        elseif(empty($logo['name'])){
            $error = "Logomarca é obrigatória.";
        }
        else{ 

            $logoName = $logo['name'];

            move_uploaded_file($logo['tmp_name'], ($dir . $logoName));

            $cad = $pdo->prepare("INSERT INTO `comercio`(`id`, `name`, `category`, `address`, `attendance`, `contact`, `link`, `logo`) VALUES (DEFAULT, '$name', '$category', '$address', '$attendance', '$contact', '$link', '$logoName')");
            
            $cad->execute();

            if($cad == true){
                $sucess = "Comércio cadastrado com sucesso.";
            }
            else{
                $error = "Erro ao cadastrar comércio.";
            }
        }
    }
?>
    