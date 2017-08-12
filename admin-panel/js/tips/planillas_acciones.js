$(document).ready(function () {
	$('#guardar').click(function () {
		var codigo_planilla=$('#codigo_planilla').val();
		var descripcion_planilla=$('#descripcion_planilla').val();
		var tipo_planilla=$('#tipo_planilla').val();
		var sueldo_base=$('#sueldo_base').val();
		var deduc_IHSS=$('#deduc_IHSS').val();
		var deduc_Esp=$('#deduc_Esp').val();
		var sueldo_neto=$('#sueldo_neto').val();
		
		// Validaciones
		if (codigo_planilla=='') {
			$("#codigo_planilla").attr('required',true);
			document.getElementById("codigo_planilla").style.border="2px solid #a94442";
			document.getElementById("codigo_planilla").focus();
			return false;
		} else {
			$("#codigo_planilla").attr('required',false);
			document.getElementById("codigo_planilla").style.border="2px solid #3c763d";
		}
		//------------------------
		if (descripcion_planilla=='') {
			$("#descripcion_planilla").attr('required',true);
			document.getElementById("descripcion_planilla").style.border="2px solid #a94442";
			document.getElementById("descripcion_planilla").focus();
			return false;
		} else {
			$("#descripcion_planilla").attr('required',false);
			document.getElementById("descripcion_planilla").style.border="2px solid #3c763d";
		}
		//------------------------
		if (tipo_planilla==null) {
			$("#tipo_planilla").attr('required',true);
			document.getElementById("tipo_planilla").style.border="2px solid #a94442";
			document.getElementById("tipo_planilla").focus();
			return false;
		} else {
			$("#tipo_planilla").attr('required',false);
			document.getElementById("tipo_planilla").style.border="2px solid #3c763d";
		}
		//------------------------
		if (sueldo_base=='') {
			$("#sueldo_base").attr('required',true);
			document.getElementById("sueldo_base").style.border="2px solid #a94442";
			document.getElementById("sueldo_base").focus();
			return false;
		} else {
			$("#sueldo_base").attr('required',false);
			document.getElementById("sueldo_base").style.border="2px solid #3c763d";
		}
		//------------------------
		if (deduc_IHSS=='') {
			$("#deduc_IHSS").attr('required',true);
			document.getElementById("deduc_IHSS").style.border="2px solid #a94442";
			document.getElementById("deduc_IHSS").focus();
			return false;
		} else {
			$("#deduc_IHSS").attr('required',false);
			document.getElementById("deduc_IHSS").style.border="2px solid #3c763d";
		}
		//------------------------
		if (deduc_Esp=='') {
			$("#deduc_Esp").attr('required',true);
			document.getElementById("deduc_Esp").style.border="2px solid #a94442";
			document.getElementById("deduc_Esp").focus();
			return false;
		} else {
			$("#deduc_Esp").attr('required',false);
			document.getElementById("deduc_Esp").style.border="2px solid #3c763d";
		}
		// Fin de las Validaciones
		
		var data = 'codigo_planilla=' + codigo_planilla + '&descripcion_planilla=' + descripcion_planilla + '&tipo_planilla=' + tipo_planilla + '&sueldo_base=' + sueldo_base + '&deduc_IHSS=' + deduc_IHSS + '&deduc_Esp=' + deduc_Esp + '&sueldo_neto=' + sueldo_neto;
		//alert(data);
		$.ajax({
			
			url: "planillas_guardar.php",

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
						message: "La planilla se ha guardado existosamente!",
						icon: 'fa fa-check' 
					},{
						type: "success"
					});
					limpiarTodo();
				}
				if (!data) {
					$.notify({
						title: "Error : ",
						message: "Ya existe una planilla del TIPO o CODIGO seleccionado!",
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
				// alert('Petición realizada');
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
		var codigo_planilla=$('#codigo_planilla').val();
		var descripcion_planilla=$('#descripcion_planilla').val();
		var tipo_planilla=$('#tipo_planilla').val();
		var sueldo_base=$('#sueldo_base').val();
		var deduc_IHSS=$('#deduc_IHSS').val();
		var deduc_Esp=$('#deduc_Esp').val();
		var sueldo_neto=$('#sueldo_neto').val();
		
		// Validaciones
		// if (codigo_planilla=='') {
		// 	$("#codigo_planilla").attr('required',true);
		// 	document.getElementById("codigo_planilla").style.border="2px solid #a94442";
		// 	document.getElementById("codigo_planilla").focus();
		// 	return false;
		// } else {
		// 	$("#codigo_planilla").attr('required',false);
		// 	document.getElementById("codigo_planilla").style.border="2px solid #3c763d";
		// }
		//------------------------
		if (descripcion_planilla=='') {
			$("#descripcion_planilla").attr('required',true);
			document.getElementById("descripcion_planilla").style.border="2px solid #a94442";
			document.getElementById("descripcion_planilla").focus();
			return false;
		} else {
			$("#descripcion_planilla").attr('required',false);
			document.getElementById("descripcion_planilla").style.border="2px solid #3c763d";
		}
		//------------------------
		if (tipo_planilla==null) {
			$("#tipo_planilla").attr('required',true);
			document.getElementById("tipo_planilla").style.border="2px solid #a94442";
			document.getElementById("tipo_planilla").focus();
			return false;
		} else {
			$("#tipo_planilla").attr('required',false);
			document.getElementById("tipo_planilla").style.border="2px solid #3c763d";
		}
		//------------------------
		if (sueldo_base=='') {
			$("#sueldo_base").attr('required',true);
			document.getElementById("sueldo_base").style.border="2px solid #a94442";
			document.getElementById("sueldo_base").focus();
			return false;
		} else {
			$("#sueldo_base").attr('required',false);
			document.getElementById("sueldo_base").style.border="2px solid #3c763d";
		}
		//------------------------
		if (deduc_IHSS=='') {
			$("#deduc_IHSS").attr('required',true);
			document.getElementById("deduc_IHSS").style.border="2px solid #a94442";
			document.getElementById("deduc_IHSS").focus();
			return false;
		} else {
			$("#deduc_IHSS").attr('required',false);
			document.getElementById("deduc_IHSS").style.border="2px solid #3c763d";
		}
		//------------------------
		if (deduc_Esp=='') {
			$("#deduc_Esp").attr('required',true);
			document.getElementById("deduc_Esp").style.border="2px solid #a94442";
			document.getElementById("deduc_Esp").focus();
			return false;
		} else {
			$("#deduc_Esp").attr('required',false);
			document.getElementById("deduc_Esp").style.border="2px solid #3c763d";
		}
		// Fin de las Validaciones
		
		var data = 'codigo_planilla=' + codigo_planilla + '&descripcion_planilla=' + descripcion_planilla + '&tipo_planilla=' + tipo_planilla + '&sueldo_base=' + sueldo_base + '&deduc_IHSS=' + deduc_IHSS + '&deduc_Esp=' + deduc_Esp + '&sueldo_neto=' + sueldo_neto;
		//alert(data);
		$.ajax({
			
			url: "planillas_cambiar.php",

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
						message: "La planilla se ha modificado existosamente!",
						icon: 'fa fa-check' 
					},{
						type: "success"
					});
					limpiarTodo();
				}
				if (!data) {
					$.notify({
						title: "Error : ",
						message: "CODIGO ingresado no existe o TIPO seleccionado ya existe!",
						icon: 'fa fa-times' 
					},{
						type: "danger"
					});
				}
				
			},

			error : function(xhr, status) {
				//  alert('Disculpe, existió un problema');
			},

			complete : function(xhr, status) {
				// alert('Petición realizada');
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