 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Task Panel </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link ">
            <i class="fas fa-fw fa-cog"></i>
            <span>Tasks</span>
        </a>
    </li>
    <div class="w-75 ml-auto mr-auto">
   
            <li class="nav-item">
                <a class="nav-link"  href="{{url('/create')}}">
                    <span> - Add</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{url('/')}}">
                    <span> - List</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{url('/statistics')}}">
                    <span> - Statistics</span></a>
            </li>

  
        </div>
   

</ul>
<!-- End of Sidebar -->