<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-left image">
                          <img src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>{{Auth::user()->name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Actions</li>
            <!-- Optionally, you can add icons to the links -->
            <li><a href="{{ route('course.create') }}"><i class="fa fa-link"></i> <span>Add Course</span></a></li>
            <li class="treeview">
                <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#">Link in level 2</a></li>
                    <li><a href="#">Link in level 2</a></li>
                </ul>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>