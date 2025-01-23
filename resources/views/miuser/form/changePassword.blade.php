<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   
    <title>Cambiar Contraseña</title>
</head>
<body>
<div class="container mt-5">
    <div class="col-md-5 mx-auto">
        <div class="card card-primary card-outline p-2">
            <div class="card-header">
                <h5 class="card-title"><i class="fa-solid fa-user"></i> Cambiar Contraseña</h5>
            </div>
            <div class="card-body">
<div class="card-body">
    <form method="POST" action="{{ route('users.update') }}">
        @csrf
        @method('PUT')

        <div class="col-md-12">
            <label for="current_password" class="form-label">Contraseña Actual</label>
            <input type="password" class="form-control" name="current_password" placeholder="Contraseña Actual" maxlength="10">
        </div>

        @if ($errors->any())
            <ul>
                @foreach ($errors->get('current_password') as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <br>

        <div class="col-md-12">
            <label for="password" class="form-label">Ingresa una nueva contraseña</label>
            <input type="password" class="form-control" name="password" placeholder="Nueva Contraseña" maxlength="10">
        </div>

        @if ($errors->any())
            <ul>
                @foreach ($errors->get('password') as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <br>

        <div class="col-md-12">
            <label for="password_confirmation" class="form-label">Repetir contraseña</label>
            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirmar Contraseña" maxlength="10">
        </div>

        @if ($errors->any())
            <ul>
                @foreach ($errors->get('password_confirmation') as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <br>

        <div class="card-body">
            <button class="btn btn-primary" type="submit">Confirmar</button>
        </div>
    </form>
</div>



            </div>
        </div>
    </div>
</div>

</body>
</html>
