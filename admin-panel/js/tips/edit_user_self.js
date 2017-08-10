jQuery(document).ready(
    function (){
        $('#guardar').click(
             function () {

                var $codigoUser = $('input[name=codigoUser]');
                var $userName = $('input[name=userName]');
                var $oldPass = $('input[name=oldPass]');
                var $sessionPass = $('input[name=sessionPass]');
                var $newPass = $('input[name=newPass]');

                if ($oldPass==$sessionPass) {
                    //$(window).attr('href', '');
                    var data = "codigoUser=" + $codigoUser.val() + "&userName=" + $userName.val() + "&newPass=" + $newPass.val();

                    $('#userform').attr('action', 'usuario_modificar_self.php')

                    /*$.ajax(
                        {
                            type: "POST",
                            url: "usuario_modificar_self.php",
                            data: data,
                            dataType: "html",
                            cache: false,

                            success: function (data) {*/
                                // $('#tip').fadeIn(1000);
                                // $('#tip').fadeOut(4000);
                                // $('#tip').html(data);
                                
                                swal({
                                    title: "Guardando cambios",
                                    text: "Para aplicar los cambios es necesario reiniciar la sesion",
                                    type: "info",
                                    showCancelButton: false,
                                    confirmButtonText: "Cerrar Sesion",
                                    cancelButtonText: "",
                                    closeOnConfirm: true,
                                    closeOnCancel: true
                                }, function(isConfirm) {
                                    if (isConfirm) {
                                    $(location).attr('href', 'logout.php');
                                    //$('#alert').html.attr('href', 'logout.php');
                                        //swal("Deleted!", "Your imaginary file has been deleted.", "success");
                                    } else {
                                    //return false;
                                        //swal("Cancelled", "Your imaginary file is safe :)", "error");
                                    }
                                });
                                
                            //}
                        //}
                    //);
                } 
                if (!($oldPass==$sessionPass)) {
                    alert($oldPass.val() + "-" + $sessionPass.val());
                    $.notify({
                        title: "Error : ",
                        message: "La contraseña antigua es incorrecta!",
                        icon: 'fa fa-times' 
                    },{
                        type: "danger"
                    });
                }
             }
        );
    }
);