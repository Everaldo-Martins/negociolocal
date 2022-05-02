<?php             
                
                $leam = $pdo->prepare("SELECT * FROM `team` ORDER BY `id`");

				$leam->execute();

				echo "
				<div class=\"grid\">
					<div class=\"ghead\">ID</div>
					<div class=\"ghead left\">Nome</div>
					<div class=\"ghead\"><span class=\"fa fa-pencil-square-o\" title=\"Editar\"></span></div>  
					<div class=\"ghead\"><span class=\"fa fa-trash\" title=\"Excluir\"></span></div>
				";

				while($com = $leam->fetchObject()){
					$id = $com->id;
					$name = $com->name;
					$address = $com->address;
					$email = $com->email;
					$phone = $com->phone;
					$mission = $com->mission;
					$foto = $com->foto;
			
					echo "
					<div>".$id."</div>
					<div class=\"left\">".$name."</div>
					<div><a href=\"?p=edit&id=".$id."\" id=\"edit\"><i class=\"fa fa-pencil-square\" title=\"Editar\"></i></a></div>
					<div><a href=\"javascript:void(0)\" class=\"trash\" alt=".$id."><i class=\"fa fa-remove\" title=\"Excluir\"></i></a></div>
					";
				}
				echo "		
			</div>
            ";
?>