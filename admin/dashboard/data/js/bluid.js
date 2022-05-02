$(document).ready(function(){
	/*
	var url = location.href;
	if(url.indexOf("add") > -1){
		$(".add").show();
		$(".conf, .list, .edit, .team").hide();
	}
	else if(url.indexOf("edit") > -1){
		$(".edit").show();
		$(".conf, .list, .add, team").hide();
	}
	else if(url.indexOf("team") > -1){
		$(".team").show();
		$(".conf, .list, .add, .edit").hide();
	}
	else if(url.indexOf("conf") > -1){
		$(".conf").show();
		$(".list, .add, .edit, .team").hide();
	}
	*/
	function preview(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
	
			reader.onload = function (e) {
				$('#preview').attr('src', e.target.result);
				$('#prevedit').attr('src', e.target.result);
				$('#preteam').attr('src', e.target.result);
			}
	
			reader.readAsDataURL(input.files[0]);
		}
	}

	$("#logo").change(function () {
		preview(this);
	});

	$("#edit_logo").change(function () {
		preview(this);
	});
	
	$("#fteam").change(function () {
		preview(this);
	});

	$('#password').on('click', function(){
		$('#bg_ch').show();
		$('#changer').show();
	});

	$('#cancel').click(function(){
		$('#bg_ch').hide();
		$('#changer').hide();
	});

	$('.trash').on('click', function(){	
		var del = $(this).attr('alt');
		$('#del').attr('value', del);
		$('#bg').show();
		$('#delete').show();
	});
	
	$('#close').click(function(){
		$('#bg').hide();
		$('#delete').hide();
	});
});
