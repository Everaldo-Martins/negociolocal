<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="IFPB-Santa Luzia, projeto, COVID-19, negocio local, compras, produtos, Santa Luzia-pb, Paraíba-PB">
    <meta name="author" content="IFPB_Santa Luzia - Desenvolvimento">
    <meta name="description" content="Proporcionar aos pequenos comerciantes a divulgação do seu comércio na rede mundial de computadores para facilitar a venda de seus produtos na sua região.">
    <title>Negócio Local</title>
    <link rel="shortcut icon" href="./essets/img/favicon/icon.ico">
    <link rel="icon" type="image/png" href="./essets/img/favicon/icon.png">

    <script src="./essets/js/jquery.min.js"></script>
    <script src="./essets/js/floatingcarousel.min.js"></script>

    <link rel="stylesheet" href="./essets/css/resets.css">
    <link rel="stylesheet" href="./essets/css/style.css">    
</head>
<body>
    <header>
        <section>
            <a href="./" class="logo"></a>
            <nav>
                <span class="icon" onclick="menu()">&#9776;</span>
                <ul class="menu">
                    <li><a href="./">Início</a></li>
                    <li><a href="sobre">Sobre</a></li>
                    <li><a href="equipe">Equipe</a></li>
                    <li><a href="contato">Contato</a></li>                    
                </ul>
            </nav>
        </section>
    </header>

    <div class="content">
        <section>
            <!--<h3>Informação</h3>-->
            <p>Este é um portal sem fins lucrativos destinado à divulgação dos negócios locais da nossa região, no qual clientes ficarão por dentro dos negócios da sua rua, do seu bairro ou da sua cidade. O projeto Negócio Local é uma iniciativa sem fins lucrativos de professores, técnicos e alunos do IFPB Campus Santa Luzia, inspirados nos projetos <a href="https://www.mercadinho.org/" target="_blank">Mercado Solidário</a> e <a href="https://www.comprelocal.org/" target="_blank">Compre Local</a>.</p>       
        </section> 
        <section>
            <?php include_once './essets/php/scroll.php'; ?>
            
        </section>                  
        <section>
            <?php include_once './essets/php/content.php'; ?>
        
        </section>
    </div>

    <footer>
        <section>
            <div class="first">
                <h4>Contato</h4>
                <p class="ins"> <a target="_blank" href="https://www.instagram.com/negociolocalifpb">@negociolocalifpb</a></p>
                <p class="wh"><a href="https://api.whatsapp.com/send?phone=5583(numero)&text=&source=&data=&app_absent=">Whatsapp</a></p>
            </div>
            <div class="middle">
                <h4>Apoio</h4>
                <a href="https://www.ifpb.edu.br/santaluzia" target="_blank">
                    <img src="./essets/img/apoio/logo_ifpb.png" alt="IFPB">
                </a>
            </div>
            <div class="last">
                <a href="sobre">Sobre</a>
                <a href="equipe">Equipe</a>
                <a href="contato">Contato</a>
                <a href="./admin" target="_blank">Área Administrativa</a>
            </div>
            <button onclick="toTop()" id="top" title="Ínicio"> &#8679; </button> 
            <p class="copyright">Copyright © <?php echo $year ?> negociolocal.org - Todos os Direitos Reservados.</p>
        </section>
    </footer>    
    <script src="./essets/js/script.js"></script>
</body>
</html>
