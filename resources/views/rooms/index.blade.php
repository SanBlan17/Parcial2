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
        <form action="{{ route('rooms.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label class="mt-2">Ingrese el nombre de la sala
                    <input type="text" name="name" placeholder="Sala 1" class="form-control">
                </label>
            </div>
            <div class="form-group">
                <label class="mt-2">Ingrese la capacidad de la sala
                    <input type="number" name="ability" placeholder="Capacidad" min="0"
                        class="form-control">
                </label>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Guardar</button>
        </form>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Capacidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rooms as $room)
                    <tr>
                        <td>{{ $room->id }}</td>
                        <td>{{ $room->name }}</td>
                        <td>{{ $room->ability }}</td>
                        <td>
                            <a href="{{ route('rooms.edit', $room) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('rooms.destroy', $room) }}" method="POST" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
