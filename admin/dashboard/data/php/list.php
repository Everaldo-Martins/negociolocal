<?php             
                
                $list = $pdo->prepare("SELECT * FROM `comercio` ORDER BY `id`");

				$list->execute();

				echo "
				<div class=\"grid\">
					<div class=\"ghead\">ID</div>
					<div class=\"ghead left\">Nome</div>
					<div class=\"ghead\"><span class=\"fa fa-pencil-square-o\" title=\"Editar\"></span></div>  
					<div class=\"ghead\"><span class=\"fa fa-trash\" title=\"Excluir\"></span></div>
				";

				while($com = $list->fetchObject()){
					$id = $com->id;
					$name = $com->name;
					$address = $com->address;
					$attendance = $com->attendance;
					$contact = $com->contact;
					$link = $com->link;
					$logo = $com->logo;
			
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