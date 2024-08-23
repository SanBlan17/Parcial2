<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container text-center mt-4">
        <form action="{{ route('sales.update', $sale->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label class="mt-4">Seleccione la pelicula
                    <select name="movie_id" class="form-control" value="{{ $sale->movie_id }}">
                        @foreach ($movies as $movie)
                            <option value="{{ $movie->id }}">{{ $movie->title }}</option>
                        @endforeach
                    </select>
                </label>
            </div>
            <div class="form-group">
                <label class="mt-4">Seleccione la sala
                    <select name="room_id" class="form-control" value="{{ $sale->room_id }}">
                        @foreach ($rooms as $room)
                            <option value="{{ $room->id }}">{{ $room->name }}</option>
                        @endforeach
                    </select>
                </label>
            </div>
            <div class="form-group">
                <label class="mt-4">Ingrese cuántas boletas desea comprar
                    <input type="number" name="tickets" placeholder="Número de boletas" min="0"
                        class="form-control" id="tickets" value="{{ $sale->tickets }}">
                </label>
            </div>
            <button type="submit" class="btn btn-primary mt-4">Guardar</button>
        </form>
    </div>
    
</body>
</html>