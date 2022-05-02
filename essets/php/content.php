<?php       
    /*/Paginação
	$pag = (isset($_GET['pag']))? $_GET['pag'] : 1;

    $count = $pdo->prepare("SELECT * FROM `comercio`");
    
    $count->execute();
    
    $lines = $count->rowCount();
    
	$reg = 8;
	   
	$numPag = ceil($lines/$reg);
	   
    $init = ($reg*$pag)-$reg;
    */   
    //Listar Comércios
    //$sql = $pdo->prepare("SELECT * FROM `comercio` ORDER BY `id` LIMIT $init, $reg");
    $sql = $pdo->prepare("SELECT * FROM `comercio` ORDER BY `id`");

    $sql->execute();

    while($com = $sql->fetchObject()){
        $id = $com->id;
        $name = $com->name;
        $address = $com->address;
        $attendance = $com->attendance;
        $contact = $com->contact;
        $link = $com->link;
        $logo = $com->logo;

        echo '
            <div class="col">
                <div class="wrap">
                    <a target="_blank" href="'.$link.'">
                        <img src="./essets/img/comercio/'.$logo.'" alt="'.$logo.'">
                    </a>
                    <!---
                    <p><strong>Nome:</strong> '.$name.'</p>
                    <p><strong>Endereço:</strong> '.$address.'</p>
                    <p><strong>Atendimento:</strong> '.$attendance.'</p>
                    <p><strong>Contato:</strong> '.$contact.'</p>
                    --->
                </div>
            </div>
        ';
    }

    /*/Exibe a paginação
    echo '<div class="page">';
	
	if($pag > 1) {
	    echo '<a href="index.php?pag='.($pag - 1).'" class="control">&laquo;</a>';
	}

	for($i = 1; $i < $numPag; $i++) {
        $active = ($i == $pag) ? 'active' : '';
		echo '<a href="index.php?pag='.$i.'" class="number '.$active.'"> '.$i.' </a>';	   
	}
	     
	if($pag < $numPag) {
	    echo '<a href="index.php?pag='.($pag + 1).'" class="control">&raquo;</a>';
	}

	echo '</div>';
    */
