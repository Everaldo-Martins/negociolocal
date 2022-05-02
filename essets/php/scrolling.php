<?php              
    include_once('connect.php');   

    //Listar Comércios
    $scroll = $pdo->prepare("SELECT `link`, `logo` FROM `comercio` ORDER BY `id`");

    $scroll->execute();

    echo '<div class="carousel" id="scroll">
                <ul>';

    while($com = $scroll->fetchObject()){
        $link = $com->link;
        $logo = $com->logo;

        echo '
                    <li><a href="'.$link.'" target="_blank"><img src="../essets/img/comercio/'.$logo.'" alt="'.$logo.'"></a></li>
                ';
    }

    echo '
                </ul>
            </div>
    ';
