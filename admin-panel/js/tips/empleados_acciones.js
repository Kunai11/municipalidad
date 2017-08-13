$(document).ready(function () {
	$('#agregar').click(function () {
		var identidad=$('#identidad').val();
		var nombre=$('#nombre').val();
		var p_apellido=$('#p_apellido').val();
		var s_apellido=$('#s_apellido').val();
		var l_nacimiento=$('#l_nacimiento').val();
		var f_nacimiento=$('#f_nacimiento').val();
		var profesion=$('#profesion').val();
		var domicilio=$('#domicilio').val();
		var telefono=$('#telefono').val();
		var f_ingreso=$('#f_ingreso').val();
		var correo=$('#correo').val();
		var nombre_e=$('#nombre_e').val();
		var numero_e=$('#numero_e').val();
		var estado=$('#estado').val();

		if (identidad=='') {
			$("#identidad").attr('required',true);
			document.getElementById("identidad").style.border="2px solid #a94442";
			document.getElementById("identidad").focus();
			return false;
		} else {
			$("#identidad").attr('required',false);
			document.getElementById("identidad").style.border="2px solid #3c763d";
		}

		if (nombre=='') {
			$("#nombre").attr('required',true);
			document.getElementById("nombre").style.border="2px solid #a94442";
			document.getElementById("nombre").focus();
			return false;
		} else {
			$("#nombre").attr('required',false);
			document.getElementById("nombre").style.border="2px solid #3c763d";
		}

		if (p_apellido=='') {
			$("#p_apellido").attr('required',true);
			document.getElementById("p_apellido").style.border="2px solid #a94442";
			document.getElementById("p_apellido").focus();
			return false;
		} else {
			$("#p_apellido").attr('required',false);
			document.getElementById("p_apellido").style.border="2px solid #3c763d";
		}

		if (s_apellido=='') {
			$("#s_apellido").attr('required',true);
			document.getElementById("s_apellido").style.border="2px solid #a94442";
			document.getElementById("s_apellido").focus();
			return false;
		} else {
			$("#s_apellido").attr('required',false);
			document.getElementById("s_apellido").style.border="2px solid #3c763d";
		}

		if (l_nacimiento=='') {
			$("#l_nacimiento").attr('required',true);
			document.getElementById("l_nacimiento").style.border="2px solid #a94442";
			document.getElementById("l_nacimiento").focus();
			return false;
		} else {
			$("#l_nacimiento").attr('required',false);
			document.getElementById("l_nacimiento").style.border="2px solid #3c763d";
		}

	

			if (profesion=='') {
			$("#profesion").attr('required',true);
			document.getElementById("profesion").style.border="2px solid #a94442";
			document.getElementById("profesion").focus();
			return false;
		} else {
			$("#profesion").attr('required',false);
			document.getElementById("profesion").style.border="2px solid #3c763d";
		}


		if (domicilio=='') {
			$("#domicilio").attr('required',true);
			document.getElementById("domicilio").style.border="2px solid #a94442";
			document.getElementById("domicilio").focus();
			return false;
		} else {
			$("#domicilio").attr('required',false);
			document.getElementById("domicilio").style.border="2px solid #3c763d";
		}

		if (telefono=='') {
			$("#telefono").attr('required',true);
			document.getElementById("telefono").style.border="2px solid #a94442";
			document.getElementById("telefono").focus();
			return false;
		} else {
			$("#telefono").attr('required',false);
			document.getElementById("telefono").style.border="2px solid #3c763d";
		}


		if (correo=='') {
			$("#correo").attr('required',true);
			document.getElementById("correo").style.border="2px solid #a94442";
			document.getElementById("correo").focus();
			return false;
		} else {
			$("#correo").attr('required',false);
			document.getElementById("correo").style.border="2px solid #3c763d";
		}

		if (nombre_e=='') {
			$("#nombre_e").attr('required',true);
			document.getElementById("nombre_e").style.border="2px solid #a94442";
			document.getElementById("nombre_e").focus();
			return false;
		} else {
			$("#nombre_e").attr('required',false);
			document.getElementById("nombre_e").style.border="2px solid #3c763d";
		}

		if (numero_e=='') {
			$("#numero_e").attr('required',true);
			document.getElementById("numero_e").style.border="2px solid #a94442";
			document.getElementById("numero_e").focus();
			return false;
		} else {
			$("#numero_e").attr('required',false);
			document.getElementById("numero_e").style.border="2px solid #3c763d";
		}

		if (estado=='') {
			$("#estado").attr('required',true);
			document.getElementById("estado").style.border="2px solid #a94442";
			document.getElementById("estado").focus();
			return false;
		} else {
			$("#estado").attr('required',false);
			document.getElementById("estado").style.border="2px solid #3c763d";
		}
		

		


		


		var data = 'identidad=' + identidad + '&nombre=' + nombre + '&p_apellido=' + p_apellido + '&s_apellido=' + s_apellido + '&l_nacimiento=' + l_nacimiento + '&profesion=' + profesion +  '&domicilio=' + domicilio + '&telefono=' + telefono + '&f_ingreso=' + f_ingreso + '&correo=' + correo + '&f_nacimiento=' + f_nacimiento + '&nombre_e=' + nombre_e + '&numero_e=' + numero_e + '&estado=' + estado;
		//alert(data);
		$.ajax({
			
			url: "guardar_empleado.php",

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





	





		



		



		



		







	