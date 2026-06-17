<x-layout>

    <form action="{{ route('recipe_update', $recipe) }}" method="POST" enctype="multipart/form-data"
        class="needs-validation">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="title" class="form-label fw-semibold text-dark-custom">Titolo della
                Ricetta</label>
            <div class="input-group-custom position-relative">
                <span class="input-icon position-absolute top-50 translate-middle-y start-3 text-muted"><i
                        class="bi bi-fonts"></i></span>
                <input type="text" class="form-control form-control-custom ps-5" value="{{ $recipe->title }}"
                    id="title" name="title" placeholder="Es. Paccheri con Pistacchio e Guanciale" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-4">
                <label for="preparation_time" class="form-label fw-semibold text-dark-custom">Tempo
                    di Preparazione
                    (minuti)</label>
                <div class="input-group-custom position-relative">
                    <span class="input-icon position-absolute top-50 translate-middle-y start-3 text-muted"><i
                            class="bi bi-clock"></i></span>
                    <input type="number" class="form-control form-control-custom ps-5"
                        value="{{ $recipe->preparation_time }}" id="preparation_time" name="preparation_time"
                        placeholder="Es. 30" min="1" required>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <label for="difficulty" class="form-label fw-semibold text-dark-custom">Difficoltà</label>
                <div class="input-group-custom position-relative">
                    <span class="input-icon position-absolute top-50 translate-middle-y start-3 text-muted"><i
                            class="bi bi-speedometer2"></i></span>
                    <select class="form-select form-control-custom ps-5" id="difficulty" name="difficulty" required>
                        <option value="" selected disabled>Seleziona livello</option>
                        <option value="Facile">Facile</option>
                        <option value="Media">Media</option>
                        <option value="Difficile">Difficile</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-4">
                <label for="category" class="form-label fw-semibold text-dark-custom">Categoria</label>
                <div class="input-group-custom position-relative">
                    <span class="input-icon position-absolute top-50 translate-middle-y start-3 text-muted"><i
                            class="bi bi-tags"></i></span>
                    <select class="form-select form-control-custom ps-5" value="{{ $recipe->category }}" id="category"
                        name="category" required>
                        <option value="" selected disabled>Scegli una categoria</option>
                        <option value="Colazione">Colazione</option>
                        <option value="Primi Piatti">Primi Piatti</option>
                        <option value="Cene Veloci">Cene Veloci</option>
                        <option value="Dolci & Dessert">Dolci & Dessert</option>
                    </select>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <label for="img" class="form-label fw-semibold text-dark-custom">Immagine
                    del Piatto</label>
                <input type="file" class="form-control form-control-custom" id="img" name="img"
                    accept="image/*">
            </div>
        </div>

        <div class="mb-5">
            <label for="description" class="form-label fw-semibold text-dark-custom">Descrizione
                & Procedimento</label>
            <textarea class="form-control form-control-custom p-3" id="description" name="description" rows="6"
                placeholder="Descrivi la storia del piatto, gli ingredienti necessari e i passaggi dettagliati per la preparazione..."
                required>{{ $recipe->description }}</textarea>
        </div>

        <div class="d-flex justify-content-end gap-3 border-top pt-4">
            <button type="reset" class="btn btn-recipe-lg-outline py-2 px-4">Svuota
                Campi</button>
            <button type="submit" class="btn btn-recipe-lg-primary py-2 px-4">
                <i class="bi bi-cloud-arrow-up me-2"></i>Pubblica Ricetta
            </button>
        </div>

    </form>

</x-layout>
