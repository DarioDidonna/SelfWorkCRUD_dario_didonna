<x-layout>

    <main class="py-5 bg-light-section">
        <div class="container py-3">
            <div class="row mb-5 align-items-center">
                <div class="col-md-8 text-center text-md-start">
                    <span class="text-uppercase tracking-wider small fw-bold text-accent d-block mb-2">Il
                        Ricettario</span>
                    <h1 class="fw-bold text-dark-custom display-5 mb-0">Tutte le Ricette</h1>
                    <p class="text-muted mt-2 mb-0">Esplora i piatti inseriti dalla nostra community e lasciati ispirare.
                    </p>
                </div>
            </div>

            <div class="row g-4">
                @forelse($recipes as $recipe)
                    <div class="col-md-6 col-lg-4">
                        <article class="card recipe-card h-100 shadow-smooth border-0 overflow-hidden bg-white">

                            <div class="recipe-card-img-wrapper position-relative">
                                @if ($recipe->img)
                                    <img src="{{ Storage::url($recipe->img) }}" alt="{{ $recipe->title }}"
                                        class="card-img-top recipe-card-img">
                                @else
                                    <img src="/media/default.png"
                                        alt="Immagine di default" class="card-img-top recipe-card-img">
                                @endif

                                <span class="badge bg-blur text-dark position-absolute top-3 start-3">
                                    {{ $recipe->category }}
                                </span>
                            </div>

                            <div class="card-body p-4 d-flex flex-column">
                                <h5 class="card-title fw-bold text-dark-custom mb-2">
                                    {{ $recipe->title }}
                                </h5>

                                <p class="card-text text-muted small flex-grow-1">
                                    {{ Str::limit($recipe->description, 90, '...') }}
                                </p>

                                <div
                                    class="recipe-meta d-flex align-items-center justify-content-between pt-3 mt-3 border-top text-muted small">
                                    <span class="d-flex align-items-center">
                                        <i class="bi bi-clock me-1 text-accent"></i>
                                        {{ $recipe->preparation_time ?? 'N/D' }} min
                                    </span>
                                    <span class="d-flex align-items-center">
                                        <i class="bi bi-speedometer2 me-1 text-accent"></i>
                                        {{ $recipe->difficulty ?? 'Media' }}
                                    </span>
                                </div>
                            </div>

                            <div class="card-footer bg-white border-0 p-4 pt-0">
                                <a href="{{ route('recipe_show', compact('recipe')) }}"
                                    class="btn btn-recipe-outline-card w-100 d-flex align-items-center justify-content-center gap-2">
                                    Leggi Ricetta <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>

                        </article>
                    </div>
                @empty
                    <div class="col-12 text-center py-5">
                        <div class="empty-state-box p-5 rounded-5 bg-white shadow-smooth mx-auto">
                            <i class="bi bi-journal-x display-1 text-muted mb-3"></i>
                            <h4 class="fw-bold text-dark-custom">Nessuna ricetta trovata</h4>
                            <p class="text-muted small mb-4">Il ricettario è ancora vuoto. Condividi la prima ricetta
                                con la community!</p>
                            <a href="{{ route('recipe_create') }}" class="btn btn-recipe-lg-primary btn-sm">Crea la prima ricetta</a>
                        </div>
                    </div>
                @endforelse
            </div>

        </div>
    </main>


</x-layout>
