$(document).ready(function () {
	// Codigo a ejecutar cuando se haga click en el boton con id guardar en la pagina planillas_crear.php
	$('#guardar').click(function () {
		// Obtener los valores de los objetos a traves de su id 
		var codigo_usuario=$('#codigo_usuario').val();
		var nombre_usuario=$('#nombre_usuario').val();
		var pass=$('#pass').val();
		var tipo=$('#tipo').val();
		var estado=$('#estado').val();
		var Id_Empleado=$('#Id_Empleado').val();
		
		// Validaciones de objetos vacios
		if (codigo_usuario=='') {
			$("#codigo_usuario").attr('required',true);
			document.getElementById("codigo_usuario").style.border="2px solid #a94442";
			document.getElementById("codigo_usuario").focus();
			return false;
		} else {
			$("#codigo_usuario").attr('required',false);
			document.getElementById("codigo_usuario").style.border="2px solid #3c763d";
		}
		//------------------------
		if (nombre_usuario=='') {
			$("#nombre_usuario").attr('required',true);
			document.getElementById("nombre_usuario").style.border="2px solid #a94442";
			document.getElementById("nombre_usuario").focus();
			return false;
		} else {
			$("#nombre_usuario").attr('required',false);
			document.getElementById("nombre_usuario").style.border="2px solid #3c763d";
		}
		//------------------------
		if (pass=='') {
			$("#pass").attr('required',true);
			document.getElementById("pass").style.border="2px solid #a94442";
			document.getElementById("pass").focus();
			return false;
		} else {
			$("#pass").attr('required',false);
			document.getElementById("pass").style.border="2px solid #3c763d";
		}
		// Fin de las Validaciones
		
		// Variable con todos los valores necesarios para la consulta
		var data = 'codigo_usuario=' + codigo_usuario + '&nombre_usuario=' + nombre_usuario + '&pass=' + pass + '&tipo=' + tipo + '&estado=' + estado + '&Id_Empleado=' + Id_Empleado;
		alert(data);
		$.ajax({
			//Direccion destino
			url: "usuarios_guardar.php",

			// Variable con los datos necesarios
			data: data,

			// Metodo de envio de datos
			type: "POST",			

			// Formato de los datos que se espera recibir del servidor
			dataType: "html",
			
			//cache: false,
			
			// funcion a ejecutar cuando la consulta se realizo con exito
			success: function (data) {
				//alert(data);
				
				// Si el servidor mando informacion
				if (data) {
					//Funcion que Notifica que todo correcto
					$.notify({
						title: "Correcto : ",
						message: "El usuario se ha guardado existosamente!",
						icon: 'fa fa-check' 
					},{
						type: "success"
					});
					// Metodo par limpiar todos los campos
					limpiarTodo();
				}
				// Si el servidor no mando informacion
				if (!data) {
					//Funcion que Notifica que hubo un error
					$.notify({
						title: "Error : ",
						message: "Ya existe un usuario con el codigo o empleado asignado",
						icon: 'fa fa-times' 
					},{
						type: "danger"
					});
				}
				
			},

			// Funcion a realizar si la consulta no se realizo y hubo un error interno
			error : function(xhr, status) {
				// alert('Disculpe, existió un problema');
			},

			// funcion a ejecutar siempre, aunque haya o no un error
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

	// Codigo a ejecutar cuando se haga click en el boton con id modificar en la pagina planillas_modificar.php
	$('#modificar').click(function () {

		// Obtener los valores de los objetos a traves de su id 
		var codigo_planilla=$('#codigo_planilla').val();
		var descripcion_planilla=$('#descripcion_planilla').val();
		var tipo_planilla=$('#tipo_planilla').val();
		var sueldo_base=$('#sueldo_base').val();
		var deduc_IHSS=$('#deduc_IHSS').val();
		var deduc_Esp=$('#deduc_Esp').val();
		var sueldo_neto=$('#sueldo_neto').val();
		
		// Validaciones de objetos vacios
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
		
		// Variable con todos los valores necesarios para la consulta
		var data = 'codigo_planilla=' + codigo_planilla + '&descripcion_planilla=' + descripcion_planilla + '&tipo_planilla=' + tipo_planilla + '&sueldo_base=' + sueldo_base + '&deduc_IHSS=' + deduc_IHSS + '&deduc_Esp=' + deduc_Esp + '&sueldo_neto=' + sueldo_neto;
		//alert(data);
		$.ajax({
			
			//Direccion destino
			url: "planillas_cambiar.php",

			// Variable con los datos necesarios
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

	// Codigo a ejecutar cuando se haga click en el boton con id eliminar en la pagina planillas_eliminar.php
	$('#eliminar').click(function () {

		// Obtener los valores de los objetos a traves de su id 
		var codigo_planilla=$('#codigo_planilla').val();
		var codigo_planilla_buscar=$('#codigo_planilla_buscar').val();
		
		// Validaciones de objetos vacios
		if (codigo_planilla_buscar=='') {
			$("#codigo_planilla_buscar").attr('required',true);
			document.getElementById("codigo_planilla_buscar").style.border="2px solid #a94442";
			document.getElementById("codigo_planilla_buscar").focus();
			return false;
		} else {
			$("#codigo_planilla_buscar").attr('required',false);
			document.getElementById("codigo_planilla_buscar").style.border="2px solid #3c763d";
		}		
		// Fin de las Validaciones
		//alert("codigo_planilla = " + codigo_planilla + " codigo_planilla_buscar = " + codigo_planilla_buscar);
		// Variable con todos los valores necesarios para la consulta
		var data = 'codigo_planilla=' + codigo_planilla;
		//alert(data);

		// Ejecutar funcion del metodo de una alerta (metodo pre-cargado) para saber si esta seguro de eliminar
      	swal({
      		title: "Esta seguro de eliminar?",
      		text: "Esta opcion no puede deshacerse.",
      		type: "warning",
      		showCancelButton: true,
      		confirmButtonText: "Si, eliminar",
      		cancelButtonText: "No, cancelar",
      		closeOnConfirm: false,
      		closeOnCancel: false
      	}, function(isConfirm) {
      		if (isConfirm) {
				// Si hizo click en el boton de SI, confirmo
				$.ajax({
					
					//Direccion destino
					url: "planillas_borrar.php",

					// Variable con los datos necesarios
					data: data,

					type: "POST",			

					dataType: "html",
					
					//cache: false,
					
					//success
					success: function (data) {
						//alert(data);
						
						// Si el servidor mando informacion
						if (data) {
							alert(data);
							// Mostrar una nueva alerta de que se realizo con exito
							swal("Eliminado!", "El registro se ha eliminado correctamente", "success");

							//Limpiar todos los campos
							limpiarTodo();
						}

						// Si el servidor no envio datos
						if (!data) {
							//Mostrar una notificacion de que hubo un error
							$.notify({
								title: "Error : ",
								message: "No existe el CODIGO ingresado!",
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
      		} else {
				// Si hizo click en el boton NO, no confirmo
				// Mostrar una alerta de que el registro esta a salvo
      			swal("Cancelado", "El registro esta a salvo", "error");
      		}
      	});
				
		return false;

	});

});

function limpiarBusqueda() {
	$("#codigo_usuario").val("").value;
}

function limpiarForm(){
	// $("#codigo_usuario").val("").value;
    $("#nombre_usuario").val("").value;
    $("#pass").val("").value;
	// $("#tipo").val("").value;
	// $("#estado").val("").value;
    // $("#Id_Empleado").val("").value;
}

function limpiarTodo() {
	$("#codigo_usuario").val("").value;
    $("#nombre_usuario").val("").value;
    $("#pass").val("").value;
	// $("#tipo").val("").value;
	// $("#estado").val("").value;
    // $("#Id_Empleado").val("").value;
}