<div class="mainnav__categoriy py-3">
    <h6 class="mainnav__caption mt-0 px-3 fw-bold">Menú</h6>
    <ul class="mainnav__menu nav flex-column">

        <!-- Link with submenu -->
        <li class="nav-item has-sub Active">
            <a href="{{route('register')}}" @if(Illuminate\Support\Facades\Request::route()->getName() == 'register') class="active nav-link " @else class=" nav-link " @endif ><i
                    class="demo-pli-male fs-5 me-2"></i>
                <span class="nav-label ms-1">Registrar Usuario</span>
            </a>
        </li>
        <!-- END : Link with submenu -->

        <!-- Link with submenu -->
        <li class="nav-item has-sub">

            <a href="{{route('lists-users')}}" @if(Illuminate\Support\Facades\Request::route()->getName() == 'lists-users') class="active nav-link " @else class=" nav-link " @endif ><i
                    class="demo-pli-male-female fs-5 me-2"></i>
                <span class="nav-label ms-1">Lista de Usuarios</span>
            </a>
        </li>
        <!-- END : Link with submenu -->

        <!-- Regular menu link -->
        <li class="nav-item">
            <a href="{{route('createConf')}}" @if(Illuminate\Support\Facades\Request::route()->getName() == 'createConf') class="active nav-link " @else class=" nav-link " @endif><i
                    class="demo-pli-calendar-4 fs-5 me-2"></i>

                <span class="nav-label mininav-content ms-1">Agenda</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('listConf')}}" @if(Illuminate\Support\Facades\Request::route()->getName() == 'listConf') class="active nav-link " @else class=" nav-link " @endif><i
                    class="demo-pli-data-cloud fs-5 me-2"></i>

                <span class="nav-label mininav-content ms-1">Lista de Resevaciones</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('conexionDataBase')}}" @if(Illuminate\Support\Facades\Request::route()->getName() == 'conexionDataBase') class="active nav-link " @else class=" nav-link " @endif><i
                    class="demo-pli-computer-secure fs-5 me-2"></i>

                <span class="nav-label mininav-content ms-1">Conexión</span>
            </a>
        </li>
        <!-- END : Regular menu link -->

    </ul>
</div>
