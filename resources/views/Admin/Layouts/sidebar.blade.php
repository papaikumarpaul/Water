<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
      <!-- Logo Header -->
      <div class="logo-header" data-background-color="dark">
        <a href="#" class="logo">
          <img
            src="{{url('./admin/img/kaiadmin/Max Waterv Logo.png')}}"
            alt="navbar brand"
            class="navbar-brand"
            
            width="200"
          />
        </a>
        <div class="nav-toggle">
          <button class="btn btn-toggle toggle-sidebar">
            <i class="gg-menu-right"></i>
          </button>
          <button class="btn btn-toggle sidenav-toggler">
            <i class="gg-menu-left"></i>
          </button>
        </div>
        <button class="topbar-toggler more">
          <i class="gg-more-vertical-alt"></i>
        </button>
      </div>
      <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
      <div class="sidebar-content">
        <ul class="nav nav-secondary">
          <li class="nav-item active text-start">
            <a
              data-bs-toggle="collapse"
              href="#dashboard"
              class="collapsed"
              aria-expanded="false"
            >
              <i class="fas fa-home"></i>
              <p>Dashboard</p>
              <span class="caret"></span>
            </a>
            <div class="collapse" id="dashboard">
              <ul class="nav nav-collapse">
                <li>
                  <a href="../demo1/index.html">
                    <span class="sub-item">Dashboard 1</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-section">
            <span class="sidebar-mini-icon">
              <i class="fa fa-ellipsis-h"></i>
            </span>
            <h4 class="text-section">Components</h4>
          </li>
          <li class="nav-item">
            <a  href="{{route('admin.blogs')}}">
              <i class="fas fa-layer-group"></i>
              <p>Blog</p>

            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.conutactDetails')}}">
              <i class="fas fa-th-list"></i>
              <p>Contact From</p>
              
            </a>
            {{-- <div class="collapse" id="sidebarLayouts">
              <ul class="nav nav-collapse">
                <li>
                  <a href="sidebar-style-2.html">
                    <span class="sub-item">Sidebar Style 2</span>
                  </a>
                </li>
                <li>
                  <a href="icon-menu.html">
                    <span class="sub-item">Icon Menu</span>
                  </a>
                </li>
              </ul>
            </div> --}}
          </li>
          <li class="nav-item">
            <a href="{{route('admin.conutactDetailsBecome')}}">
              <i class="fas fa-th-list"></i>
              <p>Become A Partner</p>
              
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.conutactDetailsSupplier')}}">
              <i class="fas fa-th-list"></i>
              <p>Become A Supplier</p>
              
            </a>
           
          </li>
          
        </ul>
      </div>
    </div>
  </div>
  <!-- End Sidebar -->
 