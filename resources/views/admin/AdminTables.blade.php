<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrador</title>

    <!-- Bootstrap core CSS -->
    
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <link rel="icon" type="image/png" href="/favicon.png" />


    <!-- Custom fonts for this template -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="../css/agency1.min.css" rel="stylesheet">

</head>


<body id="page-top" style="background-color: #E0F8F7 ">

<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 4px;
    }

    tr:nth-child(even) {
        background-color: #A9E2F3;
    }
</style>
<section id="services">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">PROVEEDORES</h2>
                <h3 class="section-subheading text-muted">Base de datos de proveedores</h3>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-10 text-center">
                <div class="col-md-10 text-center">
                    <table CELLSPACING="8" border="1">
                        <tr>
                            <th>Nombre Compañia</th>
                            <th>Tipo de empresa</th>
                            <th>Tipo de productos</th>
                            <th>Direccion</th>
                            <th>Nombre del representante</th>
                            <th>Email</th>
                            <th>Telefono</th>
                            <th>Comentarios</th>
                            <th>Eliminar</th>
                            <th>Editar</th>
                        </tr>
                        <tbody>
                        @foreach($proveedores as $proveedor)
                            <tr>
                                <td>{{ $proveedor->nombre }}</td>
                                <td>{{ $proveedor->tipo }}</td>
                                <td>{{ $proveedor->tipo_productos }}</td>
                                <td>{{ $proveedor->direccion }}</td>
                                <td>{{ $proveedor->nombreRepresentante }}</td>
                                <td>{{ $proveedor->email }}</td>
                                <td>{{ $proveedor->telefono }}</td>
                                <td>{{ $proveedor->mensaje }}</td>
                                <td>
                                    <a href="/admin/eliminar/proveedor/{{ $proveedor->id }}" class="btn btn-xs btn-danger">
                                        Eliminar
                                    </a>
                                <td>
                                    <a href="/admin/editar/proveedor/{{ $proveedor->id }}" class="btn btn-xs btn-info">
                                        Editar
                                    </a>
                                </td>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

     <br> <br> <br>

    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Reservaciones</h2>
                <h3 class="section-subheading text-muted">Base de datos de reservaciones</h3>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-12 text-center">
                <div class="col-lg-12 text-center">
                    <table CELLSPACING="10" border="1">
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
                            <th>Eliminar</th>
                            <th>Editar</th>
                        </tr>
                        <tbody>
                        @foreach($reservaciones as $reservacion)
                            <tr>
                                <td>{{ $reservacion->nombre }}</td>
                                <td>{{ $reservacion->dir }}</td>
                                <td>{{ $reservacion->telefono }}</td>
                                <td>{{ $reservacion->email }}</td>
                                <td>{{ $reservacion->ropaBlanca }}</td>
                                <td>{{ $reservacion->ropaColor }}</td>
                                <td>{{ $reservacion->cobijaCobertor }}</td>
                                <td>{{ $reservacion->horario }}</td>
                                <td>{{ $reservacion->fecha }}</td>
                                <td>
                                    <a href="/admin/eliminar/reservacion/{{ $reservacion->id }}" class="btn btn-xs btn-danger">
                                        Eliminar
                                    </a>
                                </td>
                                <td>
                                  <a href="/admin/editar/reservacion/{{ $reservacion->id }}" class="btn btn-xs btn-info">
                                        Editar
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <br> <br> <br>
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Contacto</h2>
                <h3 class="section-subheading text-muted">Buzon de mensajes</h3>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-12 text-center">
                <div class="col-lg-12 text-center">
                    <table CELLSPACING="10" border="1">
                        <tr>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Asunto</th>
                            <th>Mensaje</th>
                            <th>Eliminar</th>
                            <th>Editar</th>
                        </tr>
                        <tbody>
                        @foreach($contactos as $contacto)
                            <tr>
                                <td>{{ $contacto->nombre }}</td>
                                 <td>{{ $contacto->email }}</td>
                                  <td>{{ $contacto->asunto }}</td>
                                   <td>{{ $contacto->mensaje }}</td>
                                <td>
                                    <a href="/admin/eliminar/contacto/{{ $contacto ->id }}" class="btn btn-xs btn-danger">
                                        Eliminar
                                    </a>
                                </td>
                                <td>
                                  <a href="/admin/editar/contacto/{{ $contacto ->id }}" class="btn btn-xs btn-info">
                                        Editar
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
</body>

</html>
