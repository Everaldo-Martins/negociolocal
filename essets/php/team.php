<?php 
    include_once('connect.php');
    
    $tm = $pdo->prepare("SELECT * FROM `team` ORDER BY `id` ASC");

    $tm->execute();

    while($tem = $tm->fetchObject()){
        $id = $tem->id;
        $name = $tem->name;        
        $address = $tem->address;
        $email = $tem->email;
        $phone = $tem->phone;
        $mission = $tem->mission;
        $foto = $tem->foto;

        echo '
            <div class="col">
                <div class="wrap">
                    <img src="./fotos/'.$foto.'" alt="'.$foto.'">
                    <p class="pteam"><strong>'.$name.'</strong></p>
                    <p class="pteam">'.$mission.'</p>
                </div>
            </div>
        ';
    }
