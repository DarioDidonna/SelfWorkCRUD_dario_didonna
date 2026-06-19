<x-layout>

<div class="container my-5 py-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-5">
            
            <div class="bg-white p-5 rounded-4 shadow-smooth border-0">
                
                <div class="text-center mb-4">
                    <h2 class="fw-bold text-dark-custom">Crea un <span class="brand-accent">Account</span></h2>
                    <p class="text-muted small">Unisciti alla nostra community e condividi le tue ricette.</p>
                </div>

                <form action="{{ route('register') }}" method="POST">
                    @csrf

                    <div class="mb-3 position-relative">
                        <label for="name" class="form-label font-xs text-uppercase tracking-wider text-muted mb-2">Nome Completo</label>
                        <div class="position-relative">
                            <span class="position-absolute top-50 start-3 translate-middle-y text-muted input-icon">
                                <i class="bi bi-person"></i>
                            </span>
                            <input type="text" 
                                   name="name" 
                                   id="name" 
                                   class="form-control form-control-custom ps-5 @error('name') is-invalid @enderror" 
                                   placeholder="Mario Rossi" 
                                   value="{{ old('name') }}" 
                                   required>
                            @error('name')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>

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
                                   required>
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

                    <div class="mb-4 position-relative">
                        <label for="password_confirmation" class="form-label font-xs text-uppercase tracking-wider text-muted mb-2">Conferma Password</label>
                        <div class="position-relative">
                            <span class="position-absolute top-50 start-3 translate-middle-y text-muted input-icon">
                                <i class="bi bi-lock-fill"></i>
                            </span>
                            <input type="password" 
                                   name="password_confirmation" 
                                   id="password_confirmation" 
                                   class="form-control form-control-custom ps-5" 
                                   placeholder="••••••••" 
                                   required>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-recipe-lg-primary w-100 py-3 rounded-3 shadow-sm mb-3">
                        <i class="bi bi-person-plus me-2"></i>Registrati
                    </button>

                    <div class="text-center mt-3">
                        <p class="small text-muted mb-0">Hai già un account? 
                            <a href="{{ route('login') }}" class="text-accent fw-semibold text-decoration-none">Accedi qui</a>
                        </p>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

</x-layout>