<nav class="navbar navbar-expand-lg navbar-light bg-light p-0">

    <div class="container-fluid p-1 bg-vergueria">

      <a class="navbar-brand p-0" href=" {{ route('Web.HomeClients') }}">
          <img src="{{asset('images/logo_vergueria.png')}}" class="logo" alt="logo">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse p-4" id="navbarSupportedContent">

        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link active text-light" href=" {{ route('Web.ProductosClients') }}">Pastelofre</a>
          </li>

          <li class="nav-item dropdown">

            <a class="nav-link dropdown-toggle active text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Blog
            </a>

            <ul class="dropdown-menu bg-vergueria p-0" aria-labelledby="navbarDropdown">
                <li>
                    <a class="dropdown-item text-light" href=" {{ route('Web.SucursalClients', "Vergueria1") }}">Vergueria 1</a>
                </li>
                <li>
                  <a class="dropdown-item text-light" href=" {{ route('Web.SucursalClients', "Vergueria2") }}">Vergueria 2</a>
                </li>
                <li>
                  <a class="dropdown-item text-light" href=" {{ route('Web.SucursalClients', "Vergueria3") }}">Vergueria 3</a>
                </li>
                {{-- <li>
                    <hr class="dropdown-divider">
                </li> --}}
            </ul>

          </li>

          <li class="nav-item">
            <a class="nav-link active text-light" href=" {{ route('Web.EventosClients') }}">Eventos</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active text-light" href=" {{ route('Web.WhoWeAreClients') }}">¿Quiénes somos?</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active text-light" href=" {{ route('Web.FranquiciaClients') }}">Franquicia</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active text-light" href=" {{ route('Web.ContactoClients') }}">Contacto</a>
          </li>

          @guest

          @else

          <li>
            <div class="btn-group dropstart">
              <button type="button" class="btn dropdown-toggle text-light" data-bs-toggle="dropdown" aria-expanded="false">
                {{ Auth::user()->name }}
              </button>
              <ul class="dropdown-menu">
                <li>
                      <a class="dropdown-item" href=" {{ route('Web.HomeAdmins') }}">Admin</a>
                  </li>
                  <li>
                      <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                  </li>
                  {{-- <li>
                      <hr class="dropdown-divider">
                  </li> --}}
              </ul>
            </div>
          </li>
          @endguest

        </ul>

      </div>

    </div>

</nav>