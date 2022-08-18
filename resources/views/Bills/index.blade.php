<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    
<h5>Listado de facturas <a href="{{ route('bills.create') }}" class="btn">Crear nueva factura</a></h5>

<table>
    <thead>
    <tr>
        <th>Id de factura</th>
        <th>Nombre del producto</th>
        <th>Cantidad</th>
        <th>Método de pago</th>
        <th>Fecha hora pago</th>
        <th>Id de venta</th>
        <th>Id de Compra</th>
        <th>Acciones</th>
    </tr>
    </thead>

    <tbody>
    @foreach($bills as $bill)
        <tr>
            <td>{{ $bill->bill_id}}</td>
            <td>{{ $bill->products_id}}</td>
            <td>{{ $bill->amount}}</td>
            <td>{{ $bill->payment_method}}</td>
            <td>{{ $bill->date_time_payment}}</td>
            <td>{{ $bill->sales_id}}</td>
            <td>{{ $bill->shopping_id}}</td>
            <td>
                <a class="waves-effect waves-light btn blue darken-1">Detalles</a>
                <a class="waves-effect waves-light btn orange darken-4">Editar</a>
                <a class="waves-effect waves-light btn deep-orange accent-4">Eliminar</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    $(document).ready(function () {
        $('.collapsible').collapsible();
    });
    $(document).ready(function(){
        $('select').formSelect();
    });
    $(document).ready(function(){
    $('.sidenav').sidenav();
  });

 $(document).ready(function(){
    $('.tap-target').tapTarget();
  })

  $('.dropdown-trigger').dropdown();
</script>
</body>
</html>