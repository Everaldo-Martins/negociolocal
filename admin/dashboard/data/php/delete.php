<!-- Delete -->
<?php
if(isset($_POST['ok']) && $_POST['ok']== 'Sim'){
	
	$del = isset($_POST['del']) ? $_POST['del'] : '';

    $db = $pdo->prepare("SELECT * FROM `comercio` WHERE id = '$del'");
    
	$db->execute();

	$exc = $db->fetchObject();
    $id = $exc->id;
    $logo = $exc->logo;

    $sql = $pdo->prepare("DELETE FROM `comercio` WHERE `id` = $id");
    
	$sql->execute();

	if($sql == true){
        
		unlink($dir.'/'.$logo);
		echo "<meta HTTP-EQUIV='refresh' CONTENT='1'>";
	}
	else{
		$error = "Erro ao deletar arquivo";
    } 
}
?>
