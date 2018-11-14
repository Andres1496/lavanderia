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
            <h2 class="section-heading text-uppercase">PROVEEDORES</h2>
            <h3 class="section-subheading text-muted">Editar un proveedor</h3>
        </div>
    </div>

    <div class="row text-center">
        <div class="col-lg-12 text-center">
            <div class="col-lg-12 text-center">
                <table  border="1">
                    <tr>
                        <th>Nombre Compañia</th>
                        <th>Tipo de empresa</th>
                        <th>Tipo de productos</th>
                        <th>Direccion</th>
                        <th>Nombre del representante</th>
                        <th>Email</th>
                        <th>Telefono</th>
                        <th>Comentarios</th>
                        <th></th>
                    </tr>
                    <tbody>
                    <form  action="/admin/guardar/proveedor/{{ $proveedor->id }}" method="post">
                        <tr>
                            <td>
                                {{ csrf_field() }}
                                <input type="text" name="nombre" value="{{ $proveedor->nombre }}"/>
                            </td>
                            <td>
                                <input type="text" name="tipo" value="{{ $proveedor->tipo }}"/>
                            </td>
                            <td>
                                <input type="text" name="tipoProductos" value="{{ $proveedor->tipo_productos }}"/>
                            </td>
                            <td>
                                <input type="text" name="direccion" value="{{ $proveedor->direccion }}"/>
                            </td>
                            <td>
                                <input type="text" name="nombreRepresentante" value="{{ $proveedor->nombreRepresentante }}"/>
                            </td>
                            <td>
                                <input type="text" name="email" value="{{ $proveedor->email }}"/>
                            </td>
                            <td>
                                <input type="text" name="telefono" value="{{ $proveedor->telefono }}"/>
                            </td>
                            <td>
                                <input type="text" name="mensaje" value="{{ $proveedor->mensaje }}"/>
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
