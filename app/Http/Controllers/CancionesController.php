<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CancionesController extends Controller
{
    public function index()
    {
        $data = [
            'canciones' => [
                'Linkin Park',
                'Oasis',
                'Kiss',
                'Radiohead',
                'The Cure',
                'Coldplay',
            ]
        ];

        return view('canciones-listado', $data);
    }

    public function crear()
    {
        return view('canciones-crear', ['name' => 'James']);
    }

    public function guardar(Request $peticion)
    {
        return sprintf(
            'Se creó la canción %s satisfactoriamente.',
            $peticion->get('cancion')
        );
    }

    public function editar()
    {
        return view('canciones-editar', ['name' => 'James']);
    }

    public function actualizar()
    {
        return 'Se actualizo la canción.';
    }
}

