<?php
  session_start();
    if (isset($_SESSION['username'])&&($_SESSION['rank'])) {
      function menuAdministrador(){
?>
        <aside class="main-sidebar hidden-print">
          <section class="sidebar">
            <div class="user-panel">
              <div class="pull-left image"><img class="img-circle" src="images/user.png" alt="User Image"></div>
              <div class="pull-left info">
                <?php
                  echo "
                    <p>".$_SESSION['username']."</p>
                    <p class='designation'>".$_SESSION['rank']."</p>
                  ";
                ?>
              </div>
            </div>

            <!-- Sidebar Menu-->
            <ul class="sidebar-menu">
              <li class="active"><a href="index.php"><i class="fa fa-home fa-lg"></i><span>Inicio</span></a></li>

              <li class="treeview"><a href="#"><i class="fa fa-institution"></i><span>Opciones Administrativas</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li class="treeview"><a href="#"><i class="fa fa-group"></i><span>Empleados</span><i class="fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="empleado_agregar.php"><i class="fa fa-plus-square"></i> Agregar nuevo</a></li>
                    <li><a href="empleado_modificar.php" ><i class="fa fa-pencil-square-o"></i> Modificar existente</a></li>
                    <!--<li><a href="empleado_eliminar.php"><i class="fa fa-minus-square"></i> Eliminar existente</a></li>-->
                  </ul>
                </li>

                <li class="treeview"><a href="#"><i class="fa fa-suitcase"></i><span>Departamentos</span><i class="fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="dep_agregar.php"><i class="fa fa-plus-square"></i> Agregar nuevo</a></li>
                    <li><a href="dep_modificar.php"><i class="fa fa-pencil-square-o"></i> Modificar existente</a></li>
                    <li><a href="dep_eliminar.php"><i class="fa fa-minus-square"></i> Eliminar existente</a></li>
                  </ul>
                </li>

                <li class="treeview"><a href="#"><i class="fa fa-id-card-o"></i><span>Cargos</span><i class="fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="cargo_agregar.php"><i class="fa fa-plus-square"></i> Crear Nuevo</a></li>
                    <li><a href="cargo_modificar.php"><i class="fa fa-pencil-square-o"></i> Modificar existente</a></li>
                    <li><a href="cargo_eliminar.php"><i class="fa fa-minus-square"></i> Eliminar existente</a></li>
                  </ul>
                </li>
                <li class="treeview"><a href="#"><i class="fa fa-share"></i><span>Asignaciones</span><i class="fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="asig_crear.php"><i class="fa fa-plus-square"></i> Crear Nueva</a></li>
                    <li><a href="asig_modificar.php"><i class="fa fa-pencil-square-o"></i> Modificar existente</a></li>
                    <li><a href="asig_eliminar.php"><i class="fa fa-minus-square"></i> Eliminar existente</a></li>
                    <li><a href="asig_listado_completo.php"><i class="fa fa-file-text-o"></i> Ver Listado Completo</a></li>
                  </ul>
                </li>
              </ul>

              <li class="treeview"><a href="#"><i class="fa fa-money"></i><span>Opciones Financieras</span><i class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                  <li class="treeview"><a href="#"><i class="fa fa-dollar"></i><span>Pagos</span><i class="fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="pagos_crear.php"><i class="fa fa-credit-card"></i> Nuevo pago</a></li>
                    <li><a href="pagos_modificar.php"><i class="fa fa-pencil-square-o"></i> Modificar pago</a></li>
                  </ul>
                  <li class="treeview"><a href="#"><i class="fa fa-clipboard"></i><span>Registro</span><i class="fa fa-angle-right"></i></a>
                    <ul class="treeview-menu">
                      <li><a href="pagos_historial.php"><i class="fa fa-history"></i> Historial</a></li>
                    </ul>
                  </li>
                </ul>
              </li>

              <li class="treeview"><a href="#"><i class="fa fa-user-circle"></i><span>Gesti&oacute;n de Usuarios</span><i class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="usuarios_crear.php"><i class="fa fa-user-plus"></i> Crear Usuario</a></li>
                  <li><a href="usuarios_modificar.php"><i class="fa fa-pencil-square-o"></i> Modificar Usuario</a></li>
                  <li><a href="usuarios_eliminar.php"><i class="fa fa-user-times"></i> Eliminar Usuario</a></li>
                </ul>
              </li>

              <li class="treeview"><a href="#"><i class="fa fa-clipboard"></i><span>Reportes</span><i class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="listado_dep.php"><i class="fa fa-file-text-o"></i> Listado de Departamentos</a></li>
                  <li><a href="listado_cargos.php"><i class="fa fa-file-text-o"></i> Listado de Cargos</a></li>
                  <li><a href="listado_empleados.php"><i class="fa fa-file-text-o"></i> Listado de Empleados</a></li>
                  <li><a href="listado_usuarios.php"><i class="fa fa-file-text-o"></i> Listado de Usuarios</a></li>
                </ul>
              </li>
              <!--
              <li class="treeview"><a href="#"><i class="fa fa-search"></i><span>Busqueda</span><i class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="buscar_dep.php"><i class="fa fa-search"></i> Buscar Departamento</a></li>
                  <li><a href="buscar_cargo.php"><i class="fa fa-search"></i> Buscar Cargo</a></li>
                  <li><a href="buscar_empleado.php"><i class="fa fa-search"></i> Buscar Empleado</a></li>
                  <li><a href="buscar_usuario.php"><i class="fa fa-search"></i> Buscar Usuario</a></li>
                </ul>
              </li>
              -->
              <li class="treeview"><a href="#"><i class="fa fa-gears"></i><span>Configuraci&oacute;n</span><i class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                  <li class="treeview"><a href="#"><i class="fa fa-wpforms"></i><span>Planillas de pago</span><i class="fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="planillas_crear.php"><i class="fa fa-plus-square"></i> Crear nueva</a></li>
                    <li><a href="planillas_modificar.php?codigo_planilla_buscar=null"><i class="fa fa-pencil-square-o"></i> Modificar existente</a></li>
                    <li><a href="planillas_eliminar.php?codigo_planilla_buscar=null"><i class="fa fa-minus-square"></i> Eliminar existente</a></li>
                    <li><a href="planillas_listado_completo.php"><i class="fa fa-wpforms"></i> Ver Listado Completo</a></li>
                  </ul>
                </ul>
              </li>
              <li class="treeview"><a href="#"><i class="fa fa-lock fa-lg"></i><span>Sesi&oacute;n</span><i class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="page-user.php"><i class="fa fa-user"></i> Perfil</a></li>
                  <li><a class="alert" href="#" style="margin:0px;"><i class="fa fa-sign-out"></i> Cerrar Sesi&oacute;n</a></li>
                </ul>
              </li>
              <!-- Codigo Innecesario
              <li><a href="charts.html"><i class="fa fa-pie-chart"></i><span>Charts</span></a></li>
              <li class="treeview"><a href="#"><i class="fa fa-edit"></i><span>Forms</span><i class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="form-components.html"><i class="fa fa-circle-o"></i> Form Components</a></li>
                  <li><a href="form-custom.html"><i class="fa fa-circle-o"></i> Custom Components</a></li>
                  <li><a href="form-samples.html"><i class="fa fa-circle-o"></i> Form Samples</a></li>
                  <li><a href="form-notifications.html"><i class="fa fa-circle-o"></i> Form Notifications</a></li>
                </ul>
              </li>
              <li class="treeview"><a href="#"><i class="fa fa-th-list"></i><span>Tables</span><i class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="table-basic.html"><i class="fa fa-circle-o"></i> Basic Tables</a></li>
                  <li><a href="table-data-table.html"><i class="fa fa-circle-o"></i> Data Tables</a></li>
                </ul>
              </li>
              <li class="treeview"><a href="#"><i class="fa fa-file-text"></i><span>Pages</span><i class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="blank-page.php"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                  <li><a href="page-login.php"><i class="fa fa-circle-o"></i> Login Page</a></li>
                  <li><a href="page-lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen Page</a></li>
                  <li><a href="page-user.php"><i class="fa fa-circle-o"></i> User Page</a></li>
                  <li><a href="page-invoice.html"><i class="fa fa-circle-o"></i> Invoice Page</a></li>
                  <li><a href="page-calendar.html"><i class="fa fa-circle-o"></i> Calendar Page</a></li>
                  <li><a href="page-mailbox.html"><i class="fa fa-circle-o"></i> Mailbox</a></li>
                  <li><a href="page-error.php"><i class="fa fa-circle-o"></i> Error Page</a></li>
                </ul>
              </li>
              <li class="treeview"><a href="#"><i class="fa fa-share"></i><span>Multilevel Menu</span><i class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="blank-page.php"><i class="fa fa-circle-o"></i> Level One</a></li>
                  <li class="treeview"><a href="#"><i class="fa fa-circle-o"></i><span> Level One</span><i class="fa fa-angle-right"></i></a>
                    <ul class="treeview-menu">
                      <li><a href="blank-page.php"><i class="fa fa-circle-o"></i> Level Two</a></li>
                      <li><a href="#"><i class="fa fa-circle-o"></i><span> Level Two</span></a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              -->
            </ul>
          </section>
        </aside>
<?php
      }

      function menuEstandar(){
?>
        <aside class="main-sidebar hidden-print">
          <section class="sidebar">
            <div class="user-panel">
              <div class="pull-left image"><img class="img-circle" src="images/user.png" alt="User Image"></div>
              <div class="pull-left info">
                <?php
                  echo "
                    <p>".$_SESSION['username']."</p>
                    <p class='designation'>".$_SESSION['rank']."</p>
                  ";
                ?>
              </div>
            </div>

            <!-- Sidebar Menu-->
            <ul class="sidebar-menu">
              <li class="active"><a href="index.php"><i class="fa fa-home fa-lg"></i><span>Inicio</span></a></li>
              <!--
              <li class="treeview"><a href="#"><i class="fa fa-institution"></i><span>Opciones Administrativas</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li class="treeview"><a href="#"><i class="fa fa-group"></i><span>Empleados</span><i class="fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="empleado_agregar.php"><i class="fa fa-plus-square"></i> Agregar nuevo</a></li>
                    <li><a href="empleado_modificar.php" ><i class="fa fa-pencil-square-o"></i> Modificar existente</a></li>-->
                    <!--<li><a href="empleado_eliminar.php"><i class="fa fa-minus-square"></i> Eliminar existente</a></li>-->
                  <!--</ul>
                </li>

                <li class="treeview"><a href="#"><i class="fa fa-suitcase"></i><span>Departamentos</span><i class="fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="dep_agregar.php"><i class="fa fa-plus-square"></i> Agregar nuevo</a></li>
                    <li><a href="dep_modificar.php"><i class="fa fa-pencil-square-o"></i> Modificar existente</a></li>
                    <li><a href="dep_eliminar.php"><i class="fa fa-minus-square"></i> Eliminar existente</a></li>
                  </ul>
                </li>

                <li class="treeview"><a href="#"><i class="fa fa-id-card-o"></i><span>Cargos</span><i class="fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="cargo_agregar.php"><i class="fa fa-plus-square"></i> Crear Nuevo</a></li>
                    <li><a href="cargo_modificar.php"><i class="fa fa-pencil-square-o"></i> Modificar existente</a></li>
                    <li><a href="cargo_eliminar.php"><i class="fa fa-minus-square"></i> Eliminar existente</a></li>
                  </ul>
                </li>
                <li class="treeview"><a href="#"><i class="fa fa-share"></i><span>Asignaciones</span><i class="fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="asig_crear.php"><i class="fa fa-plus-square"></i> Crear Nueva</a></li>
                    <li><a href="asig_modificar.php"><i class="fa fa-pencil-square-o"></i> Modificar existente</a></li>
                    <li><a href="asig_eliminar.php"><i class="fa fa-minus-square"></i> Eliminar existente</a></li>
                  </ul>
                </li>
              </ul>

              <li class="treeview"><a href="#"><i class="fa fa-money"></i><span>Opciones Financieras</span><i class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                  <li class="treeview"><a href="#"><i class="fa fa-dollar"></i><span>Pagos</span><i class="fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="pagos_crear.php"><i class="fa fa-credit-card"></i> Nuevo pago</a></li>
                    <li><a href="pagos_modificar.php"><i class="fa fa-pencil-square-o"></i> Modificar pago</a></li>
                  </ul>
                  <li class="treeview"><a href="#"><i class="fa fa-clipboard"></i><span>Registro</span><i class="fa fa-angle-right"></i></a>
                    <ul class="treeview-menu">
                      <li><a href="pagos_historial.php"><i class="fa fa-history"></i> Historial</a></li>
                    </ul>
                  </li>
                </ul>
              </li>

              <li class="treeview"><a href="#"><i class="fa fa-user-circle"></i><span>Gesti&oacute;n de Usuarios</span><i class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="usuarios_crear.php"><i class="fa fa-user-plus"></i> Crear Usuario</a></li>
                  <li><a href="usuarios_modificar.php"><i class="fa fa-pencil-square-o"></i> Modificar Usuario</a></li>
                  <li><a href="usuarios_eliminar.php"><i class="fa fa-user-times"></i> Eliminar Usuario</a></li>
                </ul>
              </li>
              -->
              <li class="treeview"><a href="#"><i class="fa fa-clipboard"></i><span>Reportes</span><i class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="listado_dep.php"><i class="fa fa-file-text-o"></i> Listado de Departamentos</a></li>
                  <li><a href="listado_cargos.php"><i class="fa fa-file-text-o"></i> Listado de Cargos</a></li>
                  <li><a href="listado_empleados.php"><i class="fa fa-file-text-o"></i> Listado de Empleados</a></li>
                  <li><a href="listado_usuarios.php"><i class="fa fa-file-text-o"></i> Listado de Usuarios</a></li>
                </ul>
              </li>
              <!--
              <li class="treeview"><a href="#"><i class="fa fa-search"></i><span>Busqueda</span><i class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="buscar_dep.php"><i class="fa fa-search"></i> Buscar Departamento</a></li>
                  <li><a href="buscar_cargo.php"><i class="fa fa-search"></i> Buscar Cargo</a></li>
                  <li><a href="buscar_empleado.php"><i class="fa fa-search"></i> Buscar Empleado</a></li>
                  <li><a href="buscar_usuario.php"><i class="fa fa-search"></i> Buscar Usuario</a></li>
                </ul>
              </li>
              -->
              <li class="treeview"><a href="#"><i class="fa fa-gears"></i><span>Configuraci&oacute;n</span><i class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                  <li class="treeview"><a href="#"><i class="fa fa-wpforms"></i><span>Planillas de pago</span><i class="fa fa-angle-right"></i></a>
                  <ul class="treeview-menu"><!--
                    <li><a href="planillas_crear.php"><i class="fa fa-plus-square"></i> Crear nueva</a></li>
                    <li><a href="planillas_modificar.php?codigo_planilla_buscar=null"><i class="fa fa-pencil-square-o"></i> Modificar existente</a></li>
                    <li><a href="planillas_eliminar.php?codigo_planilla_buscar=null"><i class="fa fa-minus-square"></i> Eliminar existente</a></li>-->
                    <li><a href="planillas_listado_completo.php"><i class="fa fa-wpforms"></i> Ver Listado Completo</a></li>
                  </ul>
                </ul>
              </li>
              <li class="treeview"><a href="#"><i class="fa fa-lock fa-lg"></i><span>Sesi&oacute;n</span><i class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="page-user.php"><i class="fa fa-user"></i> Perfil</a></li>
                  <li><a class="alert" href="#" style="margin:0px;"><i class="fa fa-sign-out"></i> Cerrar Sesi&oacute;n</a></li>
                </ul>
              </li>
              <!-- Codigo Innecesario
              <li><a href="charts.html"><i class="fa fa-pie-chart"></i><span>Charts</span></a></li>
              <li class="treeview"><a href="#"><i class="fa fa-edit"></i><span>Forms</span><i class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="form-components.html"><i class="fa fa-circle-o"></i> Form Components</a></li>
                  <li><a href="form-custom.html"><i class="fa fa-circle-o"></i> Custom Components</a></li>
                  <li><a href="form-samples.html"><i class="fa fa-circle-o"></i> Form Samples</a></li>
                  <li><a href="form-notifications.html"><i class="fa fa-circle-o"></i> Form Notifications</a></li>
                </ul>
              </li>
              <li class="treeview"><a href="#"><i class="fa fa-th-list"></i><span>Tables</span><i class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="table-basic.html"><i class="fa fa-circle-o"></i> Basic Tables</a></li>
                  <li><a href="table-data-table.html"><i class="fa fa-circle-o"></i> Data Tables</a></li>
                </ul>
              </li>
              <li class="treeview"><a href="#"><i class="fa fa-file-text"></i><span>Pages</span><i class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="blank-page.php"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                  <li><a href="page-login.php"><i class="fa fa-circle-o"></i> Login Page</a></li>
                  <li><a href="page-lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen Page</a></li>
                  <li><a href="page-user.php"><i class="fa fa-circle-o"></i> User Page</a></li>
                  <li><a href="page-invoice.html"><i class="fa fa-circle-o"></i> Invoice Page</a></li>
                  <li><a href="page-calendar.html"><i class="fa fa-circle-o"></i> Calendar Page</a></li>
                  <li><a href="page-mailbox.html"><i class="fa fa-circle-o"></i> Mailbox</a></li>
                  <li><a href="page-error.php"><i class="fa fa-circle-o"></i> Error Page</a></li>
                </ul>
              </li>
              <li class="treeview"><a href="#"><i class="fa fa-share"></i><span>Multilevel Menu</span><i class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="blank-page.php"><i class="fa fa-circle-o"></i> Level One</a></li>
                  <li class="treeview"><a href="#"><i class="fa fa-circle-o"></i><span> Level One</span><i class="fa fa-angle-right"></i></a>
                    <ul class="treeview-menu">
                      <li><a href="blank-page.php"><i class="fa fa-circle-o"></i> Level Two</a></li>
                      <li><a href="#"><i class="fa fa-circle-o"></i><span> Level Two</span></a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              -->
            </ul>
          </section>
        </aside>
<?php
      }
  }else {
      header('location: page_denegado.php');
  }
?>
