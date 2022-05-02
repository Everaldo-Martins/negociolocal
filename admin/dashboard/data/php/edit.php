<?php
    $id_ed = $_GET['id'];
	$ed = $pdo->prepare("SELECT * FROM `comercio` WHERE id = '$id_ed'");
    $ed->execute();

    $edit = $ed->fetchObject();
    
	$name_ = $edit->name;
	$address_ = $edit->address;
	$attendance_ = $edit->attendance;
	$contact_ = $edit->contact;
	$link_ = $edit->link;
    $logo_ = $edit->logo;
    
    if((isset($_POST['ed'])) && ($_POST['ed'] == 'Atualizar')){     
             
        $ed_name = isset($_POST['name']) ? $_POST['name'] : '';
        $ed_category = NULL;
        $ed_address = isset($_POST['address']) ? $_POST['address'] : '';
        $ed_attendance = isset($_POST['attendance']) ? $_POST['attendance'] : '';
        $ed_contact = isset($_POST['contact']) ? $_POST['contact'] : '';
        $ed_link = isset($_POST['link']) ? $_POST['link'] : '';
        $ed_logo = isset($_FILES['logo']) ? $_FILES['logo'] : '';

        if($ed_logo['name'] !== ""){  

            unlink($dir.'/'.$logo_);

            $logoName = $ed_logo['name'];

            move_uploaded_file($ed_logo['tmp_name'], ($dir . $logoName));

            $update = $pdo->prepare("UPDATE `comercio` SET `name` = '$ed_name', `category` = '$ed_category', `address` = '$ed_address', `attendance` = '$ed_attendance', `contact` = '$ed_contact', `link` = '$ed_link', `logo` = '$logoName' WHERE `id` = '$id_ed'");
        }
        else{                       
            $update = $pdo->prepare("UPDATE `comercio` SET `name` = '$ed_name', `category` = '$ed_category', `address` = '$ed_address', `attendance` = '$ed_attendance', `contact` = '$ed_contact', `link` = '$ed_link' WHERE `id` = '$id_ed'");                    
        }
        
        $update->execute();

        if($update == true){
            $sucess = "Comércio atualizado com sucesso.";
            echo "<meta HTTP-EQUIV='refresh' CONTENT='3;URL=./?p=edit&id=".$id_ed."'>";                              
        }
        else{
            $error = "Erro ao atualizar o comércio.";
        }
    }
?> 
    