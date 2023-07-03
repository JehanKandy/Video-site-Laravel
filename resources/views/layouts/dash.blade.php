@include ('header')

<style>
    :root {
        --main-bg-color: #2be0d7;
        --main-text-color: #2e8ddb;
        --second-text-color: #bbbec5;
        --second-bg-color: #c1e0ef;
    }

    .primary-text {
        color: var(--main-text-color);
    }

    .second-text {
        color: var(--second-text-color);
    }

    .primary-bg {
        background-color: var(--main-bg-color);
    }

    .secondary-bg {
        background-color: var(--second-bg-color);
    }

    .rounded-full {
        border-radius: 100%;
    }

    #wrapper {
        overflow-x: hidden;
        background: #d0e3f3;
    }

    #sidebar-wrapper {
        min-height: 100vh;
        margin-left: -15rem;
        -webkit-transition: margin 0.25s ease-out;
        -moz-transition: margin 0.25s ease-out;
        -o-transition: margin 0.25s ease-out;
        transition: margin 0.25s ease-out;
    }

    #sidebar-wrapper .sidebar-heading {
        padding: 0.875rem 1.25rem;
        font-size: 1.2rem;
    }

    #sidebar-wrapper .list-group {
        width: 15rem;
    }

    #page-content-wrapper {
        min-width: 100vw;
    }

    #wrapper.toggled #sidebar-wrapper {
        margin-left: 0;
    }

    #menu-toggle {
        cursor: pointer;
    }

    .list-group-item {
        border: none;
        padding: 20px 30px;
    }

    .list-group-item.active {
        background-color: transparent;
        color: var(--main-text-color);
        font-weight: bold;
        border: none;
    }

    @media (min-width: 768px) {
        #sidebar-wrapper {
            margin-left: 0;
        }

        #page-content-wrapper {
            min-width: 0;
            width: 100%;
        }

        #wrapper.toggled #sidebar-wrapper {
            margin-left: -15rem;
        }
    }
</style>

<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-white" id="sidebar-wrapper">
        <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i class="fa-sharp fa-solid fa-graduation-cap"></i></div>
        <div class="list-group list-group-flush my-3">
            <a href="{{url('/admin')}}" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                    class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="{{url('/users')}}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="fas fa-user-tie me-2"></i>All Users</a>

            
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
            <div class="d-flex align-items-center">
                <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                <h2 class="fs-2 m-0">Dashboard</h2>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user me-2"></i> 
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                   {{ __('Logout') }}</a>
                
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container-fluid px-4">
            @yield('content')
        </div>
    </div>
</div>
<!-- /#page-content-wrapper -->
</div>

<script>
    var el = document.getElementById("wrapper");
    var toggleButton = document.getElementById("menu-toggle");

    toggleButton.onclick = function () {
        el.classList.toggle("toggled");
    };
</script>