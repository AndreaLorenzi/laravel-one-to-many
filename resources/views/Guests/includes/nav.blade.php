<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="http://127.0.0.1:8000/">
            <img src="{{ Vite::asset('../resources/img/GitHub-Mark.png') }}" alt="" width="40" height="40">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Projects
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('admin.projects.index') }}">List</a></li>
                        <li><a class="dropdown-item" href="{{ route('admin.projects.create') }}">Add</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('admin.projects.trashed') }}">Trash</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Types
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('admin.type.index') }}">List</a></li>
                        <li><a class="dropdown-item" href="{{ route('admin.type.create') }}">Add</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('admin.type.trashed') }}">Trash</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Submit</button>
            </form>
        </div>
    </div>
    <div class="d-flex justify-content-end m-3" style="width:130px">
        <div class="mx-1">
            <a class="dropdown-item" href="{{ route('admin.profile.edit') }}">
                {{ 'Profile' }}
            </a>
        </div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
this.closest('form').submit();">
                {{ 'Log Out' }}
            </a>
        </form>
    </div>
</nav>
