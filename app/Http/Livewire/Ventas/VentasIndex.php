<?php

namespace App\Http\Livewire\Ventas;

use App\Models\Venta;
use Livewire\Component;
use Livewire\WithPagination;

class VentasIndex extends Component
{
    use WithPagination;
    public $search;
    public $cargando = false;

     public function render()
    {
        $ventas = ($this->cargando=true) ? Venta::join('usuarios','ventas.id_usuario','=','usuarios.id')
        ->join('libros','ventas.id_libro', '=','libros.id')
        ->select(
            'ventas.*',
            'usuarios.id as id_usuario',
            'usuarios.nombre_usuario',
            'usuarios.email',
            'libros.nombrel'
        )->where('nombre_usuario', 'LIKE','%' . $this->search . '%')
        ->orwhere('nombrel', 'LIKE','%' . $this->search . '%')->orderBy('id')->paginate(10) : [];
        return view('livewire.ventas.ventas-index', compact('ventas'));
    }
    public function updatingSearch(){
        $this->resetPage();
    }
    public function cargando(){
        $this->cargando=true;
    }
}
