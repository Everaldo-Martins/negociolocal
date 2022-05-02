<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="IFPB-Santa Luzia, projeto, COVID-19, negocio local, compras, produtos, Santa Luzia-pb, Paraíba-PB">
    <meta name="author" content="IFPB_Santa Luzia - Desenvolvimento">
    <meta name="description" content="Proporcionar aos pequenos comerciantes a divulgação do seu comércio na rede mundial de computadores para facilitar a venda de seus produtos na sua região.">
    <title>Contato - Negócio Local</title>
    <link rel="shortcut icon" href="../essets/img/favicon/icon.ico">
    <link rel="icon" type="image/png" href="../essets/img/favicon/icon.png">

    <script src="../essets/js/jquery.min.js"></script>
    <script src="../essets/js/floatingcarousel.min.js"></script>

    <link rel="stylesheet" href="../essets/css/resets.css">
    <link rel="stylesheet" href="../essets/css/style.css">    
</head>
<body>
    <header>
        <section>
            <a href="./" class="logo"></a>
            <nav>
                <span class="icon" onclick="menu()">&#9776;</span>
                <ul class="menu">
                    <li><a href="../">Início</a></li>
                    <li><a href="../sobre">Sobre</a></li>
                    <li><a href="../equipe">Equipe</a></li>
                    <li><a href="#">Contato</a></li>                    
                </ul>
            </nav>
        </section>
    </header>

    <div class="content">
        
        <section>
            <?php include_once '../essets/php/scrolling.php'; ?>
        </section>
                      
        <section>
            <?php include_once '../essets/php/contact.php'; ?>	

			<div class="left">
                <div class="row">
                    <h3>Formulário de contato</h3>
                    <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
                        <input type="hidden" name="hidden" value="<?php echo $SESSION; ?>">
                        <input type="text" name="name" class="name" placeholder="Nome*">
                        <input type="text" name="address" class="address" placeholder="Endereço">
                        <input type="email" name="email" class="email" placeholder="E-mail*">
                        <input type="text" name="phone" class="phone" placeholder="Telefone*">
                        <input type="text" name="subject" class="subject" placeholder="Assunto*">
                        <textarea name="mensage" class="mensage" placeholder="Mensagem*"></textarea>
                        <div class="capmsg">
                            Resolva a equação *: <?php echo $v3 ." x (" . $v1 ." + ". $v2 .") =" ?>
                            <input type="text" name="result" class="captcha" size="3" maxlength="3">
                        </div>
                        <hr>                                             
                        <input type="submit" name="contact" class="contact"  value="Enviar">
                        <input type="reset" class="clear" value="Limpar">
                    </form>
                    <p class="error">
                        <?php
                            if($error != ""){
                                echo $error;
                            }
                        ?>
                    </p>
                    <p class="sucess">
                        <?php
                            if($sucess != ""){
                                echo $sucess;
                            }
                        ?>
                    </p>
                </div>                
			</div>
            <div class="right">
                <div class="row">
                    <h3>Mapa</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7922.353210972138!2d-36.92525046492584!3d-6.869430389624999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7af0b70e8b01a77%3A0x8f2c7fabcd0df53c!2sIFPB+Campus+Santa+Luzia!5e0!3m2!1spt-BR!2sbr!4v1411851007038" width="99%" height="250" frameborder="0" style="border:1px solid #a3a3a3; border-radius:25px;"></iframe>
                    <hr>
                    <h3>Outras formas de contato</h3>
                    <p class="ins"> <a target="_blank" href="https://www.instagram.com/negociolocalifpb">@negociolocalifpb</a></p>
                    <p class="wh"><a href="https://api.whatsapp.com/send?phone=5583(numero)&text=&source=&data=&app_absent=">Whatsapp</a></p>
                </div>                
			</div>
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
                    <img src="../essets/img/apoio/logo_ifpb.png" alt="IFPB">
                </a>
            </div>
            <div class="last">
                <a href="../">Home</a>
                <a href="../sobre">Sobre</a>
                <a href="../equipe">Equipe</a>                
                <a href="../admin" target="_blank">Área Administrativa</a>
            </div>
            <button onclick="toTop()" id="top" title="Ínicio"> &#8679; </button> 
            <p class="copyright">Copyright © <?php echo $year ?> negociolocal.org - Todos os Direitos Reservados.</p>
        </section>
    </footer>    
    <script src="../essets/js/script.js"></script>
</body>
</html>
