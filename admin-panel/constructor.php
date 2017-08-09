<?php
function menu(){
	?>
<ul class="sidebar-menu">
            <li class="active"><a href="index.php"><i class="fa fa-home"></i><span>Inicio</span></a></li>

            <li class="treeview"><a href="#"><i class="fa fa-institution"></i><span>Opciones Administrativas</span><i class="fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
              <li class="treeview"><a href="#"><i class="fa fa-group"></i><span>Empleados</span><i class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="agregar_empleado.php"><i class="fa fa-plus-square"></i> Agregar nuevo</a></li>
                  <li><a href="modificar_empleado.php"><i class="fa fa-pencil-square-o"></i> Modificar existente</a></li>
                  <li><a href="eliminar_empleado.php"><i class="fa fa-minus-square"></i> Eliminar existente</a></li>
                </ul>
              </li>
                
              <li class="treeview"><a href="#"><i class="fa fa-suitcase"></i><span>Departamentos</span><i class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="agregar_departamento.php"><i class="fa fa-plus-square"></i> Agregar nuevo</a></li>
                  <li><a href=""><i class="fa fa-pencil-square-o"></i> Modificar existente</a></li>
                  <li><a href=""><i class="fa fa-minus-square"></i> Eliminar existente</a></li>
                </ul>
              </li>

              <li class="treeview"><a href="#"><i class="fa fa-id-card-o"></i><span>Cargos</span><i class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href=""><i class="fa fa-plus-square"></i> Crear y asignar cargo</a></li>
                  <li><a href=""><i class="fa fa-pencil-square-o"></i> Modificar existente</a></li>
                  <li><a href=""><i class="fa fa-minus-square"></i> Eliminar existente</a></li>
                </ul>
              </li>
            </ul>

            <li class="treeview"><a href="#"><i class="fa fa-money"></i><span>Opciones Financieras</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li class="treeview"><a href="#"><i class="fa fa-dollar"></i><span>Pagos</span><i class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href=""><i class="fa fa-credit-card"></i> Nuevo pago</a></li>
                  <li><a href=""><i class="fa fa-pencil-square-o"></i> Modificar pago</a></li>
                </ul>
                <li class="treeview"><a href="#"><i class="fa fa-clipboard"></i><span>Registro</span><i class="fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href=""><i class="fa fa-history"></i> Historial</a></li>
                  </ul>
                </li>
              </ul>
            </li>

            <li class="treeview"><a href="#"><i class="fa fa-user-circle"></i><span>Gesti&oacute;n de Usuarios</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href=""><i class="fa fa-user-plus"></i> Crear Usuario</a></li>
                <li><a href=""><i class="fa fa-pencil-square-o"></i> Modificar Usuario</a></li>
                <li><a href=""><i class="fa fa-user-times"></i> Eliminar Usuario</a></li>
              </ul>
            </li>

            <li class="treeview"><a href="#"><i class="fa fa-clipboard"></i><span>Reportes</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href=""><i class="fa fa-file-text-o"></i> Listado de Departamentos</a></li>
                <li><a href=""><i class="fa fa-file-text-o"></i> Listado de Cargos</a></li>
                <li><a href=""><i class="fa fa-file-text-o"></i> Listado de Empleados</a></li>
                <li><a href=""><i class="fa fa-file-text-o"></i> Listado de Usuarios</a></li>
              </ul>
            </li>

            <li class="treeview"><a href="#"><i class="fa fa-search"></i><span>Busqueda</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href=""><i class="fa fa-search"></i> Buscar Departamento</a></li>
                <li><a href=""><i class="fa fa-search"></i> Buscar Cargo</a></li>
                <li><a href=""><i class="fa fa-search"></i> Buscar Empleado</a></li>
                <li><a href=""><i class="fa fa-search"></i> Buscar Usuario</a></li>
              </ul>
            </li>

             <li class="treeview"><a href="#"><i class="fa fa-gears"></i><span>Configuraci&oacute;n</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                 <li class="treeview"><a href="#"><i class="fa fa-wpforms"></i><span>Planillas predefinidas</span><i class="fa fa-angle-right"></i></a>
                    <ul class="treeview-menu">
                <li><a href=""><i class="fa fa-plus-square"></i> Crear nueva</a></li>
                <li><a href=""><i class="fa fa-pencil-square-o"></i> Modificar existente</a></li>
                <li><a href=""><i class="fa fa-minus-square"></i> Eliminar existente</a></li>
              </ul>
            </ul>
            </li>          </ul>
        </section>
      </aside>
<?php
}
?>