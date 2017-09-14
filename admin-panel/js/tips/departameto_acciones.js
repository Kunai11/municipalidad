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


	$('#eliminar').click(function () {

		// Obtener los valores de los objetos a traves de su id 
		var codigo_depto=$('#codigo_depto').val();
		var codigo_buscar=$('#codigo_buscar').val();
		
		// Validaciones de objetos vacios
		if (codigo_buscar=='') {
			$("#codigo_buscar").attr('required',true);
			document.getElementById("codigo_buscar").style.border="2px solid #a94442";
			document.getElementById("codigo_buscar").focus();
			return false;
		} else {
			$("#codigo_buscar").attr('required',false);
			document.getElementById("codigo_buscar").style.border="2px solid #3c763d";
		}		
		// Fin de las Validaciones
		//alert("codigo_depto = " + codigo_depto + " codigo_planilla_buscar = " + codigo_planilla_buscar);
		// Variable con todos los valores necesarios para la consulta
		var data = 'codigo_depto=' + codigo_depto;
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
					url: "departamento_borrar.php",

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
							//alert(data);
							// Mostrar una nueva alerta de que se realizo con exito
							swal("Eliminado!", "El registro se ha eliminado correctamente", "success");

							//Limpiar todos los campos
							$("#codigo_depto").val("").value;
		                    $("#nombre_depto").val("").value;
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

$('#limpiarTodo').click(function (){
 	
		$("#codigo_depto").val("").value;
		$("#nombre_depto").val("").value;
           
	});

	function limpiarTodo(){
		  $("#codigo_depto").val("").value;
		$("#nombre_depto").val("").value;
	}


 $('#limpiarBuscar').click(function (){
 	 $("#codigo_buscar").val("").value;
	
	});

	function limpiarBuscar(){
		 $("#codigo_buscar").val("").value;
		
	}