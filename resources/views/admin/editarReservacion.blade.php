<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrador</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="/favicon.png" />


    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency1.min.css" rel="stylesheet">

</head>


<body id="page-top" background="/css/bg.png" style="background-repeat: no-repeat; ">


<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>


<div class="container">

    <div class="row">
        <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Reservaciones</h2>
            <h3 class="section-subheading text-muted">Editar una reservacion</h3>
        </div>
    </div>

    <div class="row text-center">
        <div class="col-lg-12 text-center">
            <div class="col-lg-12 text-center">
                <table  border="1">
                    <tr>
                            <th>Nombre</th>
                            <th>Dirección</th>
                            <th>Telefono</th>
                            <th>Email</th>
                            <th>Kg Ropa Blanca</th>
                            <th>Kg Ropa Color</th>
                            <th>Piezas Cobijas Y/O Cobertores</th>
                            <th>Horario</th>
                            <th>Fecha</th>
                        <th></th>
                    </tr>
                    <tbody>
                    <form  action="/admin/guardar/reservacion/{{ $reservacion->id }}" method="post">
                        <tr>
                            <td>
                                {{ csrf_field() }}
                                <input type="text" name="nombre" value="{{ $reservacion->nombre }}"/>
                            </td>
                            <td>
                                <input type="text" name="dir" value="{{ $reservacion->dir }}"/>
                            </td>
                            <td>
                                <input type="text" name="telefono" value="{{ $reservacion->telefono }}"/>
                            </td>
                            <td>
                                <input type="text" name="email" value="{{ $reservacion->email }}"/>
                            </td>
                            <td>
                                <input type="text" name="ropaBlanca" value="{{ $reservacion->ropaBlanca }}"/>
                            </td>
                            <td>
                                <input type="text" name="ropaColor" value="{{ $reservacion->ropaColor }}"/>
                            </td>
                            <td>
                                <input type="text" name="cobijaCobertor" value="{{ $reservacion->cobijaCobertor }}"/>
                            </td>
                            <td>
                                <input type="text" name="horario" value="{{ $reservacion->horario }}"/>
                            </td>
                            <td>
                                <input type="text" name="fecha" value="{{ $reservacion->fecha }}"/>
                            </td>
                            <td>
                              <button type="submit" class="btn btn-danger">
                                    Guardar
                                </button> 
                            </td>
                        </tr>
                    </form>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<!-- Bootstrap core JavaScript -->


</body>

</html>
