<?php

namespace App\Http\Controllers;

use App\Contacto;
use App\Proveedor;
use App\Reservar;


use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $proveedores = Proveedor::get();
        $reservaciones = Reservar::get();
        $contactos = Contacto::get();

        return view('admin.AdminTables', 
            ['proveedores' => $proveedores, 'reservaciones' => $reservaciones,'contactos' => $contactos]);
    }

    public function eliminarProveedor(Request $request, $id)
    {
        Proveedor::where('id', $id)->delete();

        return back();
    }

      public function eliminarReservacion(Request $request, $id)
    {
        Reservar::where('id', $id)->delete();

        return back();
    }

     public function eliminarContacto(Request $request, $id)
    {
        Contacto::where('id', $id)->delete();

        return back();
    }

    public function editarReservacion(Request $request, $id)
    {
        $reservacion = Reservar::where('id', $id)->first();

        return view('admin.editarReservacion', ['reservacion' => $reservacion]);
    }

    public function editarProveedor(Request $request, $id)
    {
        $proveedor = Proveedor::where('id', $id)->first();

        return view('admin.editarProveedor', ['proveedor' => $proveedor]);
    }

      public function editarContacto(Request $request, $id)
    {
        $contactos = Contacto::where('id', $id)->first();

        return view('admin.editarContacto', ['contactos' => $contactos]);
    }

    public function guardarProveedor(Request $request, $id)
    {
        $proveedor = Proveedor::where('id', $id)->first();
        $proveedor->nombre = $request->get('nombre');
        $proveedor->tipo = $request->get('tipo');
        $proveedor->tipo_productos = $request->get('tipoProductos');
        $proveedor->direccion = $request->get('direccion');
        $proveedor->email = $request->get('email');
        $proveedor->telefono = $request->get('telefono');
        $proveedor->mensaje = $request->get('mensaje');
        $proveedor->save();

        return redirect('/admin');
    }

    public function guardarReservacion(Request $request, $id)
    {
        $reservacion = Reservar::where('id', $id)->first();
        $reservacion->nombre = $request->get('nombre');
        $reservacion->dir = $request->get('dir');
        $reservacion->telefono = $request->get('telefono');
        $reservacion->email = $request->get('email');
        $reservacion->ropaBlanca = $request->get('ropaBlanca');
        $reservacion->ropaColor = $request->get('ropaColor');
        $reservacion->cobijaCobertor = $request->get('cobijaCobertor');
        $reservacion->horario = $request->get('horario');
        $reservacion->fecha = $request->get('fecha');
        $reservacion->save();

        return redirect('/admin');
    }

    public function guardarContacto(Request $request, $id)
    {
        $contactos = Contacto::where('id', $id)->first();
        $contactos->nombre = $request->get('nombre');
        $contactos->email = $request->get('email');
        $contactos->asunto = $request->get('asunto');
        $contactos->mensaje = $request->get('mensaje');
        $contactos->save();

        return redirect('/admin');
    }

}
