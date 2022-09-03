<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item menu-open">
        <ul class="nav nav-treeview">
          <img style="height:45px;width:236px" src="https://www.shaplacityltd.com.bd/assets/images/logo/logo.jpg" alt="image">
        </ul>
      </li>
      <li class="nav-item">
        <a href="{{url('/')}}" class="nav-link">
          <i class="nav-icon fas fa-ellipsis-h"></i>
          
          <p>Dashboard</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-copy"></i>
          <p>
            Customer
            <i class="fas fa-angle-left right"></i>
            <span class="badge badge-info right">1</span>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{route('customer.list')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Customer List </p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-copy"></i>
          <p>
            Building
            <i class="fas fa-angle-left right"></i>
            <span class="badge badge-info right">1</span>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{route('building.list')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Building List </p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-copy"></i>
          <p>
            Land
            <i class="fas fa-angle-left right"></i>
            <span class="badge badge-info right">1</span>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{route('land.list')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Land List </p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-copy"></i>
          <p>
            Registration
            <i class="fas fa-angle-left right"></i>
            <span class="badge badge-info right">1</span>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{route('registration.list')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Registration List </p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-copy"></i>
          <p>
            Client Due Amount
            <i class="fas fa-angle-left right"></i>
            <span class="badge badge-info right">2</span>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{route('client.due.amount')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Flat Price Payment </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('client.due.amount.test')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Registration Payment </p>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>