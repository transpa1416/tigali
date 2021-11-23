@extends('homePage.auth')

@section('content')
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Recupera cuenta</h3>
                    <div class="card-body">
                        <form method="POST" action="{{ route('recovery.password') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                                    autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="password" placeholder="Contraseña" id="password" class="form-control"
                                    name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="password" placeholder="Repetir Contraseña" id="password_confirmation" class="form-control"
                                    name="password_confirmation" required>
                                @if ($errors->has('password_confirmation'))
                                <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                @endif
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Inicia sesión</button>
                            </div>
                            <br>
                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label>
                                        ¿No tienes una cuenta? <a href="/register"> Regístrate </a>
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        Si ya tienes cuenta<a href="/login"> Inicia sesión </a>
                                    </label>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
