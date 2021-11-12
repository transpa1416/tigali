@extends('homePage.auth')

@section('content')
<main class="signup-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Registro de usuarios</h3>
                    <div class="card-body">

                        <form action="{{ route('register.custom') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Nombre completo" id="name" class="form-control" name="name"
                                    required autofocus>
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email_address" class="form-control"
                                    name="email" required autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" placeholder="Área/Departamento" id="area" class="form-control"
                                    name="area" required autofocus>
                                @if ($errors->has('area'))
                                <span class="text-danger">{{ $errors->first('area') }}</span>
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
                                <button type="submit" class="btn btn-dark btn-block">Registrate</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Button trigger modal -->
{{-- <div class="button">
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
        Inscribirse
    </button>
</div> --}}

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>

      </div>

      <div class="modal-body">

        <div class="modal-split">
		1
		</div>

		<div class="modal-split">
		2
		</div>

		<div class="modal-split">
		3
		</div>

      </div>

      <div class="modal-footer">
 <!--Nothing Goes Here but is needed! -->
      </div>
    </div>
  </div>
</div>

@endsection
