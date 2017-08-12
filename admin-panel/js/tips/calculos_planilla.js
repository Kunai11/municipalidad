function calculo() {
	var sueldoBase=document.getElementById('sueldo_base').value;
    var deducIHSS=document.getElementById('deduc_IHSS').value;
    var deducEsp=document.getElementById('deduc_Esp').value;
    //var sueldoNeto=document.getElementById('sueldo_neto').value;

	if (sueldoBase=='') {
		var sueldoBaseFloat=0;	
	}
	if (sueldoBase!='') {
		 var sueldoBaseFloat=parseFloat(sueldoBase);
	}
    //------------------//
    if (deducIHSS=='') {
		var deducIHSSFloat=0;	
	}
	if (deducIHSS!='') {
		 var deducIHSSFloat=parseFloat(deducIHSS);
		 $('#valor_deduc_IHSS').html(sueldoBaseFloat*(deducIHSSFloat/100));
	}
    //------------------//
    if (deducEsp=='') {
		var deducEspFloat=0;	
	}
	if (deducEsp!='') {
		 var deducEspFloat=parseFloat(deducEsp);
		 $('#valor_deduc_esp').html(sueldoBaseFloat*(deducEspFloat/100));
	}
	//------------------//
	var sueldoNetoFloat = sueldoBaseFloat - (sueldoBaseFloat*(deducIHSSFloat/100)) - (sueldoBaseFloat*(deducEspFloat/100));
	$("#sueldo_neto").val(sueldoNetoFloat.toFixed(2)).value;
	// $.post("guardarc.php", { res: res }, function(data){
	// 	$("#result").html(data);
    // });
}

function limpiarBusqueda() {
	$("#codigo_planilla").val("").value;
}

function limpiarForm(){
	$("#descripcion_planilla").val("").value;
    $("#tipo_planilla").val("").value;
    $("#sueldo_base").val("").value;
	$("#deduc_IHSS").val("").value;
	$("#valor_deduc_IHSS").html("Valor deducido (L)").value;
    $("#deduc_Esp").val("").value;
	$("#valor_deduc_esp").html("Valor deducido (L)").value;
    $("#sueldo_neto").val("").value;
}

function limpiarTodo() {
	$("#codigo_planilla").val("").value;
    $("#descripcion_planilla").val("").value;
    $("#tipo_planilla").val("").value;
	//document.getElementById('tipo_planilla').selectedIndex(0);
    $("#sueldo_base").val("").value;
	$("#deduc_IHSS").val("").value;
	$("#valor_deduc_IHSS").html("Valor deducido (L)").value;
    $("#deduc_Esp").val("").value;
	$("#valor_deduc_esp").html("Valor deducido (L)").value;
    $("#sueldo_neto").val("").value;
}

