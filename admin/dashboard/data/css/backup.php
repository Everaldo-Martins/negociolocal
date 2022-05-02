<?php include_once 'data/php/verify.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Área Administrativa</title>
	<link rel="stylesheet" href="./data/css/resets.css">
	<link rel="stylesheet" href="./data/css/font-awesome.css">
    <link rel="stylesheet" href="./data/css/style.css">
    <link rel="shortcut icon" href="./data/img/favicon/icon.ico">
    <link rel="icon" type="image/png" href="./data/img/favicon/icon.png">
	<script src="./data/js/jquery.min.js"></script>
	<script src="./data/js/bluid.js"></script>
</head>
<body>
	<header>
		<div>
			<div class="icon">
				<a href="./"></a>
			</div>
			<div class="useric">
				
			</div>
		</div>				
	</header>
	<div class="content">
		<section class="conf">
			<?php include_once 'data/php/conf.php';?>
			<div>
				<img id="prevedit" src="./data/img/user/<?php echo $foto_conf;?>" alt="Foto" title="Foto atual">	
			</div>
			<div>
				<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
					<input type="text" name="name" class="name" value="<?php echo $name_conf; ?>">
					<input type="text" name="user" class="user" value="<?php echo $user_conf; ?>">
					<input type="email" name="email" class="email" value="<?php echo $email_conf; ?>">
					<input type="text" name="date" class="link" value="<?php echo $date_conf; ?>">								
					<input type="file" name="photo" class="photo" id="edit_photo">															
					<input type="submit" name="conf" class="edi"  value="Atualizar">
					<input type="button" class="edi" id="password" value="Alterar Senha">
					<a href="./" class="cancel">Voltar</a>									
				</form>
				<p class="c_error">
					<?php 
						if($c_error != ""){
							echo $c_error;
						}                
					?>
				</p>
				<p class="c_sucess">
					<?php 
						if($c_sucess != ""){
							echo $c_sucess;
						}
					?>
				</p>
			</div>
			<div id="changer">
				<h1>Alterar Senha</h1>
				<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
					<input type="password" name="password" class="pass" placeholder="Informe a senha">
					<input type="password" name="password_v" class="pass" placeholder="Repita a senha">										
					<input type="submit" name="user_pass" class="edi"  value="Alterar">
					<input type="button" class="edi" id="cancel" value="Cancelar">	
				</form>
				<p class="p_err">
					<?php 
						if($p_err != ""){
							echo $p_err;
						}                
					?>
				</p>
				<p class="p_suc">
					<?php 
						if($p_suc != ""){
							echo $p_suc;
						}
					?>
				</p>	
			</div>
			<div id="bg_ch"></div>
		</section>
		<section class="list">
			<?php include_once 'data/php/list.php';?>

		</section>
		<section class="add">			
			<?php include_once 'data/php/add.php';?>
			<div>
				<img id="preview" src="./data/img/preview.png" alt="Preview">
			</div>
			<div>
				<form action="" method="post" enctype="multipart/form-data" autocomplete="off">				
					<input type="text" name="name" class="name" placeholder="Nome do comércio">
					<input type="text" name="address" class="address" placeholder="Endereço">
					<input type="text" name="attendance" class="attendance" placeholder="Tipo de Atendimento">
					<input type="text" name="contact" class="contact" placeholder="Contato">
					<input type="text" name="link" class="link" placeholder="Url do site">					
					<input type="file" name="logo" class="logo" id="logo">
					<input type="submit" name="cad" class="cad"  value="Cadastrar">
					<a href="./" class="cancel">Cancelar</a>							
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
		</section>
		<section class="team">
			<?php include_once 'data/php/team.php';?>
			<div>
				<img id="preteam" src="./data/img/preteam.png" alt="Preview Team">
			</div>
			<div>
				<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
					<input type="text" name="name" class="name" placeholder="Nome">
					<input type="text" name="address" class="address" placeholder="Endereço">
					<input type="email" name="email" class="email" placeholder="E-mail">
					<input type="text" name="phone" class="contact" placeholder="Telefone">
					<input type="text" name="mission" class="contact" placeholder="Encargo">
					<input type="file" name="foto" class="logo" id="fteam">
					<input type="submit" name="team" class="cad"  value="Cadastrar">
					<a href="./" class="cancel">Cancelar</a>
				</form>
				<p class="error">
					<?php
						if($team_err != ""){
							echo $team_err;
						}
					?>
				</p>
				<p class="sucess">
					<?php
						if($team_suc != ""){
							echo $team_suc;
						}
					?>
				</p>
			</div>
		</section>
		<section class="edit">
			<?php include_once 'data/php/edit.php';?>
			<div>
				<img id="prevedit" src="../../essets/img/comercio/<?php echo $logo_; ?>" alt="Logo" title="Imagem atual">	
			</div>
			<div>
				<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
					<input type="text" name="name" class="name" value="<?php echo $name_; ?>">
					<input type="text" name="address" class="address" value="<?php echo $address_; ?>">
					<input type="text" name="attendance" class="attendance" value="<?php echo $attendance_; ?>">
					<input type="text" name="contact" class="contact" value="<?php echo $contact_; ?>">
					<input type="text" name="link" class="link" value="<?php echo $link_; ?>">					
					<input type="file" name="logo" class="logo" id="edit_logo">					
					<input type="submit" name="ed" class="edi"  value="Atualizar">
					<a href="./" class="cancel">Cancelar</a>					
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
		</section>		
	</div>
	<footer>
		<section>
			<p>Copyright © <?php echo $year; ?> negociolocal.org - Todos os Direitos Reservados.</p>
		</section>
	</footer>
	<?php include_once 'data/php/delete.php' ?>
	<div id="bg"></div>
	<div id="delete">
		<p class="msg">Deseja excluir este registro?</p>	
		<?php
			if($error != " "){
				echo "<p class='er'>", $error, "</p>";
			} 
		?>
		<form action="" method="post" enctype="multipart/form-data">
			<input type="hidden" id="del" name="del" value="">
			<input type="submit" class="ok" name="ok" value="Sim">
			<input type="button" id="close" class="close" value="Não">
		</form>
	</div>
</body>
</html>



<nav>
			<div class="navbar">
			<i class='bx bx-menu'></i>
				<a class="logo_nl" href="./"></a>
				<div class="nav-links">
					<div class="sidebar-logo">
					<span class="logo-name">CodingLab</span>
					<i class='bx bx-x' ></i>
					</div>
					<ul class="links">
						<li><a href="./" title="Listar comércios"><i class="fa fa-list-alt"></i></a></li>
						<li><a href="?p=add" id="add" title="Adicionar novo comércio"><i class="fa fa-pencil-square-o"></i></a></li>						
						<li><a href="?p=listeam" id="listeam" title="Listar membros da equipe"><i class="fa fa-address-card"></i></a></li>
						<li><a href="?p=team" id="team" title="Adicionar membro da equipe"><i class="fa fa-user-circle"></i></a></li>
						<li><a href="../../" target="_blank" title="Visualizar no site"><i class="fa fa-eye"></i></a></li>					
					</ul>
				</div>			
			</div>
		</nav>