<?php              
    include_once('connect.php');
    
    //Ano da footer
    $year = date('Y');

    //Executa o banco de dados
    $pdo = db_connect();

    //Listar Comércios
    $scroll = $pdo->prepare("SELECT `link`, `logo` FROM `comercio` ORDER BY `id`");

    $scroll->execute();

    echo "<div class=\"slider\">

            <div>";

    while($com = $scroll->fetchObject()){
        $link = $com->link;
        $logo = $com->logo;

        echo "
                <a href=\"$link\" target=\"_blank\"><img src=\"./essets/img/comercio/$logo\" alt=\"$logo\"></a>
                ";
    }
    echo "</div>
    
        <div>";
        $scroll->execute();
        
    while($com = $scroll->fetchObject()){
        $link = $com->link;
        $logo = $com->logo;
    
        echo "
                <a href=\"$link\" target=\"_blank\"><img src=\"./essets/img/comercio/$logo\" alt=\"$logo\"></a>
                ";
    }

    echo '
            </div>
        </div>
    ';
