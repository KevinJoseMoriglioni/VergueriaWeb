@can('AdminRoutes')
  <nav class="navbar-fluid">
      <ul class="navbar-nav text-center">
          @can('CRUDVerguerias')
          <li class="nav-item">
            <a class="btn nav-link active text-light" href=" {{ route('Web.VergueriasAdmins') }}">Verguerias</a>
          </li>
          <li class="nav-item">
            <a class="btn nav-link active text-light" href=" {{ route('Web.UsersAdmins') }}">Usuarios</a>
          </li>
          @endcan
          @can('Contenido')
          <li class="nav-item">
            <a class="btn nav-link active text-light" href=" {{ route('Web.ContenidoAdmins') }}">Contenido</a>
          </li>
          @endcan
          @can('Pedidos')
          <li class="nav-item">
            <a class="btn nav-link active text-light" href=" {{ route('Web.PedidosAdmins') }}">Pedidos</a>
          </li>
          @endcan
      </ul>
  </nav>
@endcan
