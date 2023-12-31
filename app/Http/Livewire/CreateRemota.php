<?php

namespace App\Http\Livewire;

use App\Models\Cliente;
use App\Models\Encargado;
use App\Models\Proveedor;
use App\Models\Remota;
use App\Models\Revendedor;
use App\Models\Socio;
use Livewire\Component;

class CreateRemota extends Component
{

    public $open = false;
    public function render()
    {
        $remotas = Remota::all();
        $socios = Socio::all();
        $revendedores = Revendedor::all();
        $clientes = Cliente::has('encargados')->with('encargados')->get();
        $encargados = Encargado::all();
        $satelites = [];
        $planes = [];
        $proveedores = Proveedor::Has('satelites')->with('satelites')->get();


        return view('livewire.create-remota', compact('remotas','planes','remotas','clientes','proveedores',
        'socios','revendedores','encargados','satelites'));
    }
}
