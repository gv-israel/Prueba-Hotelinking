	$("#generar").click(function(e) {
		var r = confirm("Estas seguro que deseas generar un codigo promocional?");
		if (r == false) {
			return false;
		}
		
		$.getJSON('include/generar-codigo.php',function(data) {
			if(data.Codigo){
			   	$("#codigoGenerado").html("<h1>"+data.Codigo+"</h1>");
			   }
			else{
				alert("Ocurrio un error.")
			}
		});
	});
	$("#cerrar-sesion").click(function(e) {
		var r = confirm("Estas seguro que deseas cerrar sesion?");
		if (r == false) {
			return false;
		}
	});
	$(document).on("submit","#iniciar-sesion",function(){
		var r = confirm("Estas seguro que deseas iniciar sesion?");
		if (r == false) {
			return false;
		}
	});
	$(document).on("submit","#registrarse",function(){
		var r = confirm("Estas seguro que deseas registrarte?");
		if (r == false) {
			return false;
		}
	});

	$(".canjear").click(function(e) {
		var r = confirm("Estas seguro que deseas canjear el codigo promocional?");
		if (r == false) {
			return false;
		}
		var idcodigo = $(this).attr("data-id");
		window.location="include/canjear-codigo.php?id="+idcodigo;
	});