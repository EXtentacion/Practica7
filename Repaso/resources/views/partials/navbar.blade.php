<nav class="navbar navbar-expand-lg bg-3498db">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Practica 7</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active {{ request()->routeIs('apodoInicio') ? 'text-primary' : '' }}" aria-current="page" href="{{ route('apodoInicio') }}">
                        Inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('apodoRegistro') ? 'text-primary' : '' }}" href="{{ route('apodoRegistro') }}">Registro libro</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
