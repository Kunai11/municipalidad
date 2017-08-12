MODULO AGREGAR

    <!-- Inicio del contenido de la pagina  -->
        <!-- NOTA las clases llama al archivo css del estilo para que su diseño tome forma -->
        <!-- div contendor de una "tarjeta de contenido" -->
        <div class="row">

          <!-- div que delimita el ancho de la "tarjeta de contenido"  -->
          <div class="col-md-12">
            
            <!-- div con clase card o "tarjeta de contenido" -->
            <div class="card">

              <!-- div para el titulo de la tarjeta -->
              <div class="card-title">

                <!-- titulo alineado al centro -->
                <h3 class="card-title" align="center">Nueva Planilla</h3>
              </div>

              <!-- div para el contenido de la tarjeta - el formulario -->
              <div class="card-body">

                <!-- form que alinea las etiqueta al lado de los inputs -->
                <form class="form-horizontal" id="crear_planilla" >

                  <!-- div que contiene un par de objetos es decir la etiqueta y el input correspondiente -->
                  <div class="form-group">

                    <!-- Etiqueta con clase que delimita el ancho "debe caber junto con el input en el ancho definido del div de arriba" -->
                    <label class="control-label col-md-3">Codigo de planilla</label>

                    <!-- div con clase que delimita el ancho "debe caber junto con la etiqueta en el ancho definido del div de arriba" -->
                    <div class="col-md-8">

                      <!-- Input para el campo, tiene el id para ser reconocido por jQuery -->
                      <input class="form-control" type="text" name="codigo_planilla" id="codigo_planilla" placeholder="Ingresar codigo de planilla" required>
                    </div>
                  </div>

                  <!-- div que contiene un par de objetos es decir la etiqueta y el input correspondiente -->
                  <div class="form-group">

                    <!-- Etiqueta con clase que delimita el ancho "debe caber junto con el input en el ancho definido del div de arriba" -->
                    <label class="control-label col-md-3">Descripci&oacute;n</label>

                    <!-- div con clase que delimita el ancho "debe caber junto con la etiqueta en el ancho definido del div de arriba" -->
                    <div class="col-md-8">

                      <!-- Input para el campo, tiene el id para ser reconocido por jQuery -->
                      <input class="form-control" type="text" name="descripcion_planilla" id="descripcion_planilla" placeholder="Ingresar una breve descripcion" required>
                    </div>
                  </div>

                  <!-- div que contiene un par de objetos es decir la etiqueta y el input correspondiente -->
                  <div class="form-group">

                    <!-- Etiqueta con clase que delimita el ancho "debe caber junto con el select en el ancho definido del div de arriba" -->
                    <label class="control-label col-md-3">Tipo</label>
                    
                    <!-- div con clase que delimita el ancho "debe caber junto con la etiqueta en el ancho definido del div de arriba" -->
                    <div class="col-md-8">
                      
                    <!-- Select para el campo, tiene el id para ser reconocido por jQuery -->
                      <select class="form-control" id="tipo_planilla">

                        <!-- Script PHP que consulta la tabla cargos y muestra un option: el value se llena con el codigo obtenido y lo que se mostrara con el nombre obtenido  -->
                        <?php 
                          $queryListaCargos=mysqli_query($db, "SELECT * FROM cargos") or die(mysqli_error());
                          while ($rowCargo=mysqli_fetch_array($queryListaCargos)) {
                            echo '<option value="'.$rowCargo['Cod_Cargo'].'">'.$rowCargo['Nom_Cargo'].'</option>';  
                          }
                        ?>
                        </select>
                    </div>
                  </div>

                  <!-- div que contiene un par de objetos es decir la etiqueta y el input correspondiente -->
                  <div class="form-group">

                    <!-- Etiqueta con clase que delimita el ancho "debe caber junto con el select en el ancho definido del div de arriba" -->
                    <label class="control-label col-md-3">Sueldo Base</label>

                    <!-- div con clase que delimita el ancho "debe caber junto con la etiqueta en el ancho definido del div de arriba" -->
                    <div class="col-md-8">

                      <!-- div que muestra varios elementos juntos -->
                      <div class="input-group">

                        <!-- span que sirve para darle estilo a un texto que sirva de ayuda para saber el tipo de dato -->
                        <span class="input-group-addon" >L</span>

                        <!-- Input para el campo, tiene el id para ser reconocido por jQuery, tipo numero, valor minimo es 0,
                             ACCIONES: cuando cambie el valor que contiene o se presione y suelte una tecla llama a la funcion
                             calculo() del script planillas_calculo.js definido al final -->
                        <input class="form-control" type="number" min="0" name="sueldo_base" id="sueldo_base" onchange="calculo()" onkeyup="calculo()" placeholder="Ingresar el sueldo base" required>
                      </div>
                    </div>
                  </div>

                  <!-- div que contiene un par de objetos es decir la etiqueta y el input correspondiente -->
                  <div class="form-group">

                    <!-- Etiqueta con clase que delimita el ancho "debe caber junto con el select en el ancho definido del div de arriba" -->
                    <label class="control-label col-md-3">Deduci&oacute;n por IHSS</label>

                    <!-- div con clase que delimita el ancho "debe caber junto con la etiqueta en el ancho definido del div de arriba" -->
                    <div class="col-md-8">

                      <!-- div que muestra varios elementos juntos -->   
                      <div class="input-group">

                        <!-- span que sirve para darle estilo a un texto que sirva de ayuda para saber el tipo de dato -->
                        <span class="input-group-addon" >%</span>

                        <!-- Input para el campo, tiene el id para ser reconocido por jQuery, tipo numero, valor minimo es 0,
                             ACCIONES: cuando cambie el valor que contiene o se presione y suelte una tecla llama a la funcion
                             calculo() del script planillas_calculo.js definido al final -->
                        <input class="form-control" type="number" min="0" name="deduc_IHSS" id="deduc_IHSS" onchange="calculo()" onkeyup="calculo()" placeholder="Ingresar el porcentaje de la deduccion" required>

                        <!-- span que sirve para darle estilo a un texto que sirva de ayuda para saber el valor del porcentaje ingresado -->
                        <span class="input-group-addon" id="valor_deduc_IHSS">Valor deducido (L)</span>
                      </div>
                    </div>
                  </div>

                  <!-- div que contiene un par de objetos es decir la etiqueta y el input correspondiente -->
                  <div class="form-group">

                    <!-- Etiqueta con clase que delimita el ancho "debe caber junto con el select en el ancho definido del div de arriba" -->
                    <label class="control-label col-md-3">Deducciones Especiales</label>

                    <!-- div con clase que delimita el ancho "debe caber junto con la etiqueta en el ancho definido del div de arriba" -->
                    <div class="col-md-8">

                    <!-- div que muestra varios elementos juntos -->   
                      <div class="input-group">

                        <!-- span que sirve para darle estilo a un texto que sirva de ayuda para saber el tipo de dato -->
                        <span class="input-group-addon" >%</span>

                        <!-- Input para el campo, tiene el id para ser reconocido por jQuery, tipo numero, valor minimo es 0,
                             ACCIONES: cuando cambie el valor que contiene o se presione y suelte una tecla llama a la funcion
                             calculo() del script planillas_calculo.js definido al final -->
                        <input class="form-control" type="number" min="0" name="deduc_Esp" id="deduc_Esp" onchange="calculo()" onkeyup="calculo()" placeholder="Ingresar el porcentaje de la deduccion" required>

                        <!-- span que sirve para darle estilo a un texto que sirva de ayuda para saber el valor del porcentaje ingresado -->
                        <span class="input-group-addon" id="valor_deduc_esp">Valor deducido (L)</span>
                      </div>
                    </div>
                  </div>

                  <!-- div que contiene un par de objetos es decir la etiqueta y el input correspondiente -->
                  <div class="form-group">

                  <!-- Etiqueta con clase que delimita el ancho "debe caber junto con el select en el ancho definido del div de arriba" -->
                    <label class="control-label col-md-3">Sueldo Neto</label>

                    <!-- div con clase que delimita el ancho "debe caber junto con la etiqueta en el ancho definido del div de arriba" -->
                    <div class="col-md-8">

                      <!-- div que muestra varios elementos juntos -->   
                      <div class="input-group">

                        <!-- span que sirve para darle estilo a un texto que sirva de ayuda para saber el tipo de dato -->
                        <span class="input-group-addon" >L</span>

                        <!-- input que muestra el resultado del calculo automatico y resta de las deducciones, Esta deshabilitado -->
                        <input class="form-control" type="number" min="0" name="sueldo_neto" id="sueldo_neto" placeholder="Sueldo Neto" disabled="disabled" required>
                      </div>
                    </div>
                  </div>

                 </form>
              </div>

              <!-- div para el pie de la tarjeta, alineado al centro -->
              <div class="card-footer" align="center">

                <!-- button con ID para ser reconocido por jQuery cuando se haga click que tambien contiene 
                     un <i> para el icono  -->
                <button class="btn btn-primary icon-btn" type="submit" form="crear_planilla" id="guardar" name="guardar"><i class="fa fa-fw fa-lg fa-check-circle"></i>Guardar</button>

                <!-- Espacios -->
                &nbsp;&nbsp;&nbsp;

                <!-- button que cuando se presione ejecute una funcion jQuery para limpiar todo el formulario 
                     que tambien contiene un <i> para el icono -->
                <button class="btn btn-default icon-btn" type="button" onclick="limpiarTodo()"><i class="fa fa-fw fa-lg fa-times-circle"></i>Limpiar</button>
              </div>
            </div>
            
          </div>
        </div>
        <!-- Final del contenido de la pagina -->
      </div>
    </div>
    <!-- Javascripts-->
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/pace.min.js"></script>
    <script src="js/main.js"></script>

    <!-- Definir script para la notificacion superior en pantalla -->
    <script type="text/javascript" src="js/plugins/bootstrap-notify.min.js"></script>

    <!-- Definir script para calculos -->
    <script src="js/tips/calculos_planilla.js"></script>

    <!-- Definir script para la accion a ejecutar segun ID del boton -->
    <script src="js/tips/planillas_acciones.js"></script>

    <!-- Definir script la alerta de Cerrar Sesion -->
    <script type="text/javascript" src="js/plugins/sweetalert.min.js"></script>