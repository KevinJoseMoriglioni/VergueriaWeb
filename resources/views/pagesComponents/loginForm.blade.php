<div class="card col-8 col-center">
    <div class="card-header bg-vergueria text-white">{{ __('Login') }}</div>
    <div class="card-body text-center">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="row m-0 my-2">
                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo electrónico') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row m-0 my-2">
                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row m-0 my-2">
                <div class="col-md-6 col-center p-0">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Recordar contraseña') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="row m-0 my-2">
                <div class="col-md-8 col-center">
                    <button type="submit" class="btn text-light bg-vergueria">
                        {{ __('Login') }}
                    </button>

                    {{-- @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif --}}
                </div>
            </div>
        </form>
    </div>
</div>