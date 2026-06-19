<x-layout>

    <main class="py-5">
        <div class="container py-3">

            <div class="row mb-4">
                <div class="col-12">
                    <a href="{{ route('recipes_index') }}"
                        class="btn btn-recipe-lg-outline py-2 px-3 btn-sm d-inline-flex align-items-center gap-2">
                        <i class="bi bi-arrow-left"></i> Torna al Ricettario
                    </a>
                </div>
            </div>

            <div class="row g-5">

                <div class="col-lg-8">
                    <article class="recipe-detail-wrapper">

                        <span class="badge bg-recipe mb-3 text-uppercase tracking-wider">{{ $recipe->category }}</span>
                        <h1 class="display-5 fw-bold text-dark-custom mb-4">{{ $recipe->title }}</h1>

                        <div
                            class="detail-img-container mb-5 rounded-4 shadow-sm overflow-hidden d-flex justify-content-center align-items-center bg-light">
                            @if ($recipe->img)
                                <img src="{{ Storage::url($recipe->img) }}" alt="{{ $recipe->title }}"
                                    class="img-fluid w-100 h-100 detail-main-img">
                            @else
                                <img src="/media/default.png" alt="Immagine di default"
                                    class="img-fluid w-100 h-100 detail-main-img">
                            @endif
                        </div>

                        <div class="recipe-instructions bg-white p-4 p-md-5 rounded-4 shadow-smooth">
                            <h3 class="fw-bold text-dark-custom mb-4 d-flex align-items-center gap-2">
                                <i class="bi bi-journal-text text-accent"></i> Ingredienti e Procedimento
                            </h3>
                            <p class="text-muted leading-relaxed whitespace-pre-line">
                                {!! nl2br(e($recipe->description)) !!}
                            </p>
                        </div>

                    </article>
                </div>

                <div class="col-lg-4">
                    <aside class="sticky-sidebar">

                        <div class="card border-0 shadow-smooth rounded-4 bg-white p-4 mb-4">
                            <h5 class="fw-bold text-dark-custom mb-4 pb-2 border-bottom">Informazioni</h5>

                            @if ($recipe->user_id != null)
                                <div class="d-flex align-items-center gap-3 mb-4">
                                    <div class="sidebar-icon-box"><i class="bi bi-person"></i></div>
                                    <div>
                                        <small
                                            class="text-muted d-block text-uppercase tracking-wider font-xs">Pubblicato
                                            da</small>
                                        <span class="fw-bold text-dark-custom">{{ $recipe->user->name }}</span>
                                    </div>
                                </div>
                            @endif

                            <div class="d-flex align-items-center gap-3 mb-4">
                                <div class="sidebar-icon-box"><i class="bi bi-clock"></i></div>
                                <div>
                                    <small class="text-muted d-block text-uppercase tracking-wider font-xs">Tempo
                                        Totale</small>
                                    <span class="fw-bold text-dark-custom">{{ $recipe->preparation_time }} minuti</span>
                                </div>
                            </div>

                            <div class="d-flex align-items-center gap-3 mb-4">
                                <div class="sidebar-icon-box"><i class="bi bi-speedometer2"></i></div>
                                <div>
                                    <small
                                        class="text-muted d-block text-uppercase tracking-wider font-xs">Difficoltà</small>
                                    <span class="fw-bold text-dark-custom">{{ $recipe->difficulty }}</span>
                                </div>
                            </div>

                            <div class="d-flex align-items-center gap-3">
                                <div class="sidebar-icon-box"><i class="bi bi-calendar-check"></i></div>
                                <div>
                                    <small class="text-muted d-block text-uppercase tracking-wider font-xs">Pubblicata
                                        il</small>
                                    <span
                                        class="fw-bold text-dark-custom">{{ $recipe->created_at->format('d/m/Y') }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 shadow-smooth rounded-4 bg-dark-sidebar p-4 text-white">
                            <h6 class="fw-bold mb-3 text-accent text-uppercase tracking-wider small">Gestisci Piatto
                            </h6>
                            <p class="small text-white-50 mb-4">Sei l'autore di questa ricetta? Puoi modificarne i testi
                                o rimuoverla dal portale.</p>


                            @auth
                                @if (Auth::id() == $recipe->user_id)
                                    <div class="d-grid gap-2">
                                        <a href="{{ route('recipe_edit', compact('recipe')) }}"
                                            class="btn btn-warning fw-semibold py-2 rounded-3 text-dark">
                                            <i class="bi bi-pencil-square me-2"></i>Modifica Ricetta
                                        </a>

                                        <form action="{{ route('recipe_destroy', $recipe) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-outline-danger fw-semibold py-2 rounded-3">
                                                <i class="bi bi-trash3 me-2"></i>Elimina
                                            </button>
                                        </form>
                                @endif
                            @endauth

                        </div>
                </div>

                </aside>
            </div>

        </div>
        </div>
    </main>




</x-layout>
