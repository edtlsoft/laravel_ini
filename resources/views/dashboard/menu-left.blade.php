<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
        <img src="images/admin-lte/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
        <p>{{ Auth::user()->empleado->nombreCorto() }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
            </span>
        </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">NAVEGACIÓN PRINCIPAL</li>
        <li class="active">
            <a href="#"><i class="fa fa-tachometer-alt"></i> <span>Dashboard</span></a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i>
            <span>Referencia</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/general.html"><i class="far fa-circle"></i> Registrar</a></li>
            <li><a href="pages/UI/icons.html"><i class="far fa-circle"></i> Panel de Referencias</a></li>
            <li><a href="pages/UI/buttons.html"><i class="far fa-circle"></i> Reporte de Referencias</a></li>
          </ul>
        </li>
        <li>
            <a href="#"><i class="fa fa-folder"></i> <span>Referencia</span></a>
        </li>
        <li class="treeview">
        <a href="#" style="display: none">
            <i class="fa fa-folder"></i> <span>Contrarreferencia</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="active"><a href="#"><i class="fa fa-edit"></i>Registrar Referencia</a></li>
            <li><a href="#"><i class="far fa-list-alt"></i>Panel de Referencia</a></li>
        </ul>
        </li>


        <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li><a href="#" v-on:click="logout"><i class="fa fa-power-off"></i> <span>Salir</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
    </ul>
    </section>
    <!-- /.sidebar -->
</aside>