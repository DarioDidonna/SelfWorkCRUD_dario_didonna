<x-layout>

<div class="container my-5 py-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-5">
            
            <div class="bg-white p-5 rounded-4 shadow-smooth border-0">
                
                <div class="text-center mb-4">
                    <h2 class="fw-bold text-dark-custom">Bentornato su <span class="brand-accent">Gusto</span></h2>
                    <p class="text-muted small">Accedi per gestire le tue ricette e i tuoi piatti preferiti.</p>
                </div>

                @if (session('status'))
                    <div class="alert alert-success small rounded-3 mb-4" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form action="{{ route('login') }}" method="POST">
                    @csrf

                    <div class="mb-3 position-relative">
                        <label for="email" class="form-label font-xs text-uppercase tracking-wider text-muted mb-2">Indirizzo Email</label>
                        <div class="position-relative">
                            <span class="position-absolute top-50 start-3 translate-middle-y text-muted input-icon">
                                <i class="bi bi-envelope"></i>
                            </span>
                            <input type="email" 
                                   name="email" 
                                   id="email" 
                                   class="form-control form-control-custom ps-5 @error('email') is-invalid @enderror" 
                                   placeholder="esempio@email.com" 
                                   value="{{ old('email') }}" 
                                   required 
                                   autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 position-relative">
                        <label for="password" class="form-label font-xs text-uppercase tracking-wider text-muted mb-2">Password</label>
                        <div class="position-relative">
                            <span class="position-absolute top-50 start-3 translate-middle-y text-muted input-icon">
                                <i class="bi bi-lock"></i>
                            </span>
                            <input type="password" 
                                   name="password" 
                                   id="password" 
                                   class="form-control form-control-custom ps-5 @error('password') is-invalid @enderror" 
                                   placeholder="••••••••" 
                                   required>
                            @error('password')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="form-check">
                            <input class="form-check-input checkbox-custom" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label small text-muted" for="remember">
                                Ricordami su questo PC
                            </label>
                        </div>
                        @if (Route::has('password.request'))
                            <a class="small text-accent text-decoration-none" href="{{ route('password.request') }}">
                                Password dimenticata?
                            </a>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-recipe-lg-primary w-100 py-3 rounded-3 shadow-sm mb-3">
                        <i class="bi bi-box-arrow-in-right me-2"></i>Accedi
                    </button>

                    <div class="text-center mt-3">
                        <p class="small text-muted mb-0">Non hai ancora un account? 
                            <a href="{{ route('register') }}" class="text-accent fw-semibold text-decoration-none">Registrati qui</a>
                        </p>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

</x-layout>