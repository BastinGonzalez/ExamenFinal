<?php

namespace App\Http\Livewire\Ventas;

use App\Models\Libro;
use App\Models\Usuario;
use App\Models\Venta;
use Livewire\Component;

class VentasCreate extends Component
{
    public Venta $venta;
    public function mount(){
        $this->venta =  new Venta();
    }
     public function render()
    {
        $usuarios = Usuario::all();
        $libros = Libro::all();
        return view('livewire.ventas.ventas-create',compact('usuarios','libros'));
    }public function crear(){
        $this->validate();
        $this->venta->save();
        return redirect(route('indexVentas'));
    }
    public function rules(){
        return rules::rulesVentas();
    }
}
