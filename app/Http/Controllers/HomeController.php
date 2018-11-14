<?php

namespace App\Http\Controllers;

use App\Proveedor;
use App\Reservar;
use App\Contacto;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('lavanderia');
    }

    public function proveedores()
    {
        return view('proveedores');
    }

    public function enviap()
    {
        $data = request()->all();

        Proveedor::create([
            'nombre'  => $data['nombre'],
            'tipo' => $data['tipo'],
            'tipo_productos' => $data['tipo_productos'],
            'direccion' => $data['direccion'],
            'nombreRepresentante' => $data['nombreRepresentante'],
            'email' => $data['email'],
            'telefono' => $data['telefono'],
            'mensaje' => $data['mensaje']
        ]);

        return redirect()->route('home');
    }

    public function reservar()
    {
        $data = request()->all();

        Reservar::create([
            'nombre'  => $data['nombre'],
            'dir' => $data['dir'],
            'telefono' => $data['telefono'],
            'email' => $data['email'],
            'ropaBlanca' => $data['ropaBlanca'],
            'ropaColor' => $data['ropaColor'],
            'cobijaCobertor' => $data['cobijaCobertor'],
            'horario' => $data['horario'],
            'fecha' => $data['fecha']
        ]);


        return redirect()->route('home');
    }

    public function contacto()
    {
        $data = request()->all();

        Contacto::create([
            'nombre'  => $data['nombre'],
            'email' => $data['email'],
            'asunto' => $data['asunto'],
            'mensaje' => $data['mensaje']
        ]);

        
        return redirect()->route('home');
    }

 }