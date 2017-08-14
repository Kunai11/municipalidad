$(document).ready(function () {
	$('#agregar').click(function () {
		var codigo_cargo=$('#codigo_cargo').val();
		var nombre_cargo=$('#nombre_cargo').val();
		

		if (codigo_cargo=='') {
			$("#codigo_cargo").attr('required',true);
			document.getElementById("codigo_cargo").style.border="2px solid #a94442";
			document.getElementById("codigo_cargo").focus();
			return false;
		} else {
			$("#codigo_cargo").attr('required',false);
			document.getElementById("codigo_cargo").style.border="2px solid #3c763d";
		}

		if (nombre_cargo=='') {
			$("#nombre_cargo").attr('required',true);
			document.getElementById("nombre_cargo").style.border="2px solid #a94442";
			document.getElementById("nombre_cargo").focus();
			return false;
		} else {
			$("#nombre_cargo").attr('required',false);
			document.getElementById("nombre_cargo").style.border="2px solid #3c763d";
		}

		var data = 'codigo_cargo=' + codigo_cargo + '&nombre_cargo=' + nombre_cargo;
		
		$.ajax({
			
			url: "guardar_cargo.php",

			data: data,

			type: "POST",			

			dataType: "html",


			
			//cache: false,
			
			//success
			success: function (data) {
			
				
				if (data) {
					$.notify({
						title: "Correcto : ",
						message: "Datos de empleado se han guardado existosamente!",
						icon: 'fa fa-check' 

						
					},{
						type: "success"
					});
						$("#codigo_cargo").val("").value;
		                $("#nombre_cargo").val("").value;
				}
				if (!data) {
					$.notify({
						title: "Error : ",
						message: "Ya existe un empleado con la identidad ingresada",
						icon: 'fa fa-times' 
					},{
						type: "danger"
					});
				}
				
			},

			error : function(xhr, status) {
				// alert('Disculpe, existió un problema');
			},

			complete : function(xhr, status) {
				// alert('Petic
				// $.notify({
				// 		title: "Informacion : ",
				// 		message: "Petición realizada!",
				// 		icon: 'fa fa-check' 
				// 	},{
				// 		type: "info"
				// });
			}

		});
				
		return false;
	});


	$('#modificar').click(function () {
		var codigo_buscar=$('#codigo_buscar').val();
		var nombre_cargo=$('#nombre_cargo').val();
		

		if (codigo_buscar=='') {
			$("#codigo_buscar").attr('required',true);
			document.getElementById("codigo_buscar").style.border="2px solid #a94442";
			document.getElementById("codigo_buscar").focus();
			return false;
		} else {
			$("#codigo_buscar").attr('required',false);
			document.getElementById("codigo_buscar").style.border="2px solid #3c763d";
		}

		if (nombre_cargo=='') {
			$("#nombre_cargo").attr('required',true);
			document.getElementById("nombre_cargo").style.border="2px solid #a94442";
			document.getElementById("nombre_cargo").focus();
			return false;
		} else {
			$("#nombre_cargo").attr('required',false);
			document.getElementById("nombre_cargo").style.border="2px solid #3c763d";
		}

		var data = 'codigo_buscar=' + codigo_buscar + '&nombre_cargo=' + nombre_cargo;
		//alert(data);
		$.ajax({
			
			url: "cargo_cambiar.php",

			data: data,

			type: "POST",			

			dataType: "html",
			
			//cache: false,
			
			//success
			success: function (data) {
				//alert(data);
				
				if (data) {
					$.notify({
						title: "Correcto : ",
						message: "Datos de empleado se han guardado existosamente!",
						icon: 'fa fa-check' 
					},{
						type: "success"
					});
					$("#codigo_buscar").val("").value;
		            $("#nombre_cargo").val("").value;
					
				}
				if (!data) {
					$.notify({
						title: "Error : ",
						message: "Ya existe un empleado con la identidad ingresada",
						icon: 'fa fa-times' 
					},{
						type: "danger"
					});
				}
				
			},

			error : function(xhr, status) {
				// alert('Disculpe, existió un problema');
			},

			complete : function(xhr, status) {
				// alert('Petic
				// $.notify({
				// 		title: "Informacion : ",
				// 		message: "Petición realizada!",
				// 		icon: 'fa fa-check' 
				// 	},{
				// 		type: "info"
				// });
			}

		});
				
		return false;
	});
});