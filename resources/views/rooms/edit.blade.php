<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container text-center mt-2">
        <form action="{{ route('rooms.update', $room->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label class="mt-2">Ingrese el nombre de la sala
                    <input type="text" name="name" placeholder="Numero de Sala" class="form-control" value="{{ $room->name }}">
                </label>
            </div>
            <div class="form-group">
                <label class="mt-2">Ingrese la capacidad de la sala
                    <input type="number" name="ability" placeholder="Capacidad" min="0"
                        class="form-control" value="{{ $room->ability }}">
                </label>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Guardar</button>
        </form>
    </div>
</body>

</html>
