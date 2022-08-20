<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h5>Listado de Entregas <a href="{{ route('deliveries.create') }}" class="btn">Crear nueva Entrega</a></h5>

<table>
    <thead>
    <tr>
        <th>Id de Entrega</th>
        <th>Estado</th>
        <th>Fecha y hora de entrega</th>
        <th>Observación</th>
        <th>Acciones</th>
    </tr>
    </thead>

    <tbody>
    @foreach($deliveries as $delivery)
        <tr>
            <td>{{ $delivery->delivery_id}}</td>
            <td>{{ $delivery->estate}}</td>
            <td>{{ $delivery->date_time_delivery}}</td>
            <td>{{ $delivery->observation}}</td>
            <td>
                <a class="waves-effect waves-light btn blue darken-1">Detalles</a>
                <a class="waves-effect waves-light btn orange darken-4">Editar</a>
                <a class="waves-effect waves-light btn deep-orange accent-4">Eliminar</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>


</body>
</html>