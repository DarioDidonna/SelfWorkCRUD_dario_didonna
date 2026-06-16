<footer class="footer-custom pt-5 pb-3 text-white">
    <div class="container">
        <div class="row gy-4 mb-5">

            <div class="col-lg-4 col-md-6">
                <a class="navbar-brand d-inline-block mb-3 fw-bold fs-4 text-white text-decoration-none"
                    href="{{ url('/') }}">
                    <i class="bi bi-egg-fried me-2 text-accent"></i>Gusto<span class="text-accent">Digitale</span>
                </a>
                <p class="text-white-50 small pe-lg-4">
                    La piattaforma ideale per appassionati di cucina. Organizza le tue ricette, sperimenta nuovi piatti
                    e tieni il tuo ricettario sempre a portata di mano.
                </p>
                <div class="d-flex gap-3 mt-4">
                    <a href="#" class="social-link"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="social-link"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="social-link"><i class="bi bi-youtube"></i></a>
                    <a href="#" class="social-link"><i class="bi bi-pinterest"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 col-6">
                <h6 class="text-uppercase tracking-wider small fw-bold text-accent mb-3">Naviga</h6>
                <ul class="list-unstyled footer-links">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="#">Tutte le Ricette</a></li>
                    <li><a href="#">Categorie</a></li>
                    <li><a href="#">Chi Siamo</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-6 col-6">
                <h6 class="text-uppercase tracking-wider small fw-bold text-accent mb-3">Gestione</h6>
                <ul class="list-unstyled footer-links">
                    <li><a href="#">Nuova Ricetta</a></li>
                    <li><a href="#">Area Personale</a></li>
                    <li><a href="#">Linee Guida</a></li>
                    <li><a href="#">Supporto</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-6">
                <h6 class="text-uppercase tracking-wider small fw-bold text-accent mb-3">Rimani Aggiornato</h6>
                <p class="text-white-50 small mb-3">Iscriviti per ricevere una notifica ogni volta che viene inserito un
                    nuovo piatto sfizioso.</p>
                <form class="footer-form">
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="La tua email" aria-label="La tua email">
                        <button class="btn btn-recipe-nav" type="button">
                            <i class="bi bi-send"></i>
                        </button>
                    </div>
                </form>
            </div>

        </div>

        <hr class="border-white-10 my-4">

        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
                <p class="mb-0 text-white-50 small">&copy; 2026 GustoDigitale. Tutti i diritti riservati.</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <p class="mb-0 text-white-50 small">Sviluppato con <i class="bi bi-heart-fill text-danger mx-1"></i> in
                    Laravel & Bootstrap</p>
            </div>
        </div>
    </div>
</footer>
