$(document).ready(function () {
	// Codigo a ejecutar cuando se haga click en el boton con id guardar en la pagina planillas_crear.php
	$('#guardar').click(function () {
		// Obtener los valores de los objetos a traves de su id 
		var Cod_Dep = $('#Cod_Dep').val();
		var Cod_Cargo = $('#Cod_Cargo').val();
		var Id_Empleado = $('#Id_Empleado').val();

		// Validaciones de objetos vacios

		// Fin de las Validaciones

		// Variable con todos los valores necesarios para la consulta
		var data = 'Cod_Dep=' + Cod_Dep + '&Cod_Cargo=' + Cod_Cargo + '&Id_Empleado=' + Id_Empleado;

		//alert(data);
		$.ajax({
			//Direccion destino
			url: "asig_guardar.php",

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
						message: "La asignacion se ha guardado existosamente!",
						icon: 'fa fa-check'
					}, {
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
						message: "Posibles errores:<ul><li>El cargo ya ha sido asignado al departamento seleccionado.</li><li>El empleado ya ha sido asignado!</li></ul>",
						icon: 'fa fa-times'
					}, {
						type: "danger"
					});
				}

			},

			// Funcion a realizar si la consulta no se realizo y hubo un error interno
			error: function (xhr, status) {
				// alert('Disculpe, existió un problema');
			},

			// funcion a ejecutar siempre, aunque haya o no un error
			complete: function (xhr, status) {
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
		var Cod_Dep = $('#Cod_Dep').val();
		var Cod_Cargo = $('#Cod_Cargo').val();
		var Id_Empleado = $('#Id_Empleado').val();

		// Validaciones de objetos vacios
		
		// Fin de las Validaciones
		//alert("codigo_planilla = " + codigo_planilla + " codigo_planilla_buscar = " + codigo_planilla_buscar);
		// Variable con todos los valores necesarios para la consulta
		var data = 'Cod_Dep=' + Cod_Dep + '&Cod_Cargo=' + Cod_Cargo + '&Id_Empleado=' + Id_Empleado ;
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
		}, function (isConfirm) {
			if (isConfirm) {
				// Si hizo click en el boton de SI, confirmo
				$.ajax({

					//Direccion destino
					url: "asig_borrar.php",

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

						}

						// Si el servidor no envio datos
						if (!data) {
							//Mostrar una notificacion de que hubo un error
							swal("Error", "No existe la asignacion con los datos seleccionados!", "error");
							// $.notify({
							// 	title: "Error : ",
							// 	message: "No existe la asignacion con los datos seleccionados!",
							// 	icon: 'fa fa-times'
							// }, {
							// 	type: "danger"
							// });
							
						}

					},

					error: function (xhr, status) {
						// alert('Disculpe, existió un problema');
					},

					complete: function (xhr, status) {
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