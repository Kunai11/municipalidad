jQuery(document).ready(
    function (){

        $('#ingresar').click(
             function () {
                var $usuario = $('input[name=usuario]');
                var $pass = $('input[name=pass]');
                //alert($usuario.val() + "-" + $pass.val());
                //----//
                if ($usuario.val()=='') {
                    $('#usuario').attr('required', true);

                    document.getElementById("usuario").style.border="2px solid red";
                    document.getElementById("usuario").focus();

                    return false;
                } else {
                    $('#usuario').attr('required', false);
                    document.getElementById("usuario").style.border="2px solid green";
                }
                //----//
                if ($pass.val()=='') {
                    $("#pass").attr('undefined', true);

                    document.getElementById("pass").style.border="2px solid red";
                    document.getElementById("pass").focus();

                    return false;
                } else {
                    $("#pass").attr('required', false);
                    document.getElementById("pass").style.border="2px solid green";
                }
                //----//
                
                var data = "usuario=" + $usuario.val() + "&pass=" + $pass.val();

                $.ajax(
                    {
                        type: "POST",
                        url: "validar.php",
                        data: data,
                        dataType: "html",
                        cache: false,

                        success: function (data) {
                            $('#tip').fadeIn(1000);
                            $('#tip').fadeOut(4000);
                            $('#tip').html(data);
                        }
                    }
                );
                return false;
            }

        );
    }
);