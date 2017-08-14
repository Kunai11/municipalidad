$(document).ready(function () {
	$('#agregar').click(function () {
		var codigo_depto=$('#codigo_depto').val();
		var nombre_depto=$('#nombre_depto').val();
		

		if (codigo_depto=='') {
			$("#codigo_depto").attr('required',true);
			document.getElementById("codigo_depto").style.border="2px solid #a94442";
			document.getElementById("codigo_depto").focus();
			return false;
		} else {
			$("#codigo_depto").attr('required',false);
			document.getElementById("codigo_depto").style.border="2px solid #3c763d";
		}

		if (nombre_depto=='') {
			$("#nombre_depto").attr('required',true);
			document.getElementById("nombre_depto").style.border="2px solid #a94442";
			document.getElementById("nombre_depto").focus();
			return false;
		} else {
			$("#nombre_depto").attr('required',false);
			document.getElementById("nombre_depto").style.border="2px solid #3c763d";
		}

		var data = 'codigo_depto=' + codigo_depto + '&nombre_depto=' + nombre_depto;
		alert(data);
		$.ajax({
			
			url: "guardar_departamento.php",

			data: data,

			type: "POST",			

			dataType: "html",
			
			//cache: false,
			
			//success
			success: function (data) {
				alert(data);
				
				if (data) {
					$.notify({
						title: "Correcto : ",
						message: "Datos de empleado se han guardado existosamente!",
						icon: 'fa fa-check' 
					},{
						type: "success"
					});
					limpiarTodo();
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
		var codigo_depto=$('#codigo_depto').val();
		var nombre_depto=$('#nombre_depto').val();
		

		if (codigo_depto=='') {
			$("#codigo_depto").attr('required',true);
			document.getElementById("codigo_depto").style.border="2px solid #a94442";
			document.getElementById("codigo_depto").focus();
			return false;
		} else {
			$("#codigo_depto").attr('required',false);
			document.getElementById("codigo_depto").style.border="2px solid #3c763d";
		}

		if (nombre_depto=='') {
			$("#nombre_depto").attr('required',true);
			document.getElementById("nombre_depto").style.border="2px solid #a94442";
			document.getElementById("nombre_depto").focus();
			return false;
		} else {
			$("#nombre_depto").attr('required',false);
			document.getElementById("nombre_depto").style.border="2px solid #3c763d";
		}

		var data = 'codigo_depto=' + codigo_depto + '&nombre_depto=' + nombre_depto;
		//alert(data);
		$.ajax({
			
			url: "departamento_cambiar.php",

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
					limpiarTodo();
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