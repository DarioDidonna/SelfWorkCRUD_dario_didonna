<nav class="navbar navbar-expand-lg navbar-custom sticky-top shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <i class="bi bi-egg-fried me-2 brand-icon"></i>Gusto<span class="brand-accent">Digitale</span>
        </a>

        <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('articles') ? 'active' : '' }}" href="#">Ricette</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Categorie</a>
                </li>
                
                <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                    <a class="btn btn-recipe-nav d-inline-flex align-items-center" href="#">
                        <i class="bi bi-plus-circle me-2"></i> Nuova Ricetta
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>