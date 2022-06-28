@can('AdminRoutes')
  <nav class="navbar-fluid">
      <ul class="navbar-nav text-center">
          @can('CRUDVerguerias')
          <li class="nav-item">
            <a class="btn nav-link active text-light" href="#">Verguerias</a>
          </li>
          <li class="nav-item">
            <a class="btn nav-link active text-light" href="#">Usuarios</a>
          </li>
          @endcan
          @can('Contenido')
          <li class="nav-item">
            <a class="btn nav-link active text-light" href="#">Contenido</a>
          </li>
          @endcan
          @can('Pedidos')
          <li class="nav-item">
            <a class="btn nav-link active text-light" href="#">Pedidos</a>
          </li>
          @endcan
      </ul>
  </nav>
@endcan
