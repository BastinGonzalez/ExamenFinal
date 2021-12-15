<?php

namespace App\Http\Livewire\Libros;

use App\Models\Libro;
use Livewire\Component;

class DeleteLibro extends Component
{
    public Libro $libro;
    public function render()
    {
        return view('livewire.libros.delete-libro');
    }
    public function delete(){
        $this->libro->delete();
        return redirect(route('indexLibros'));
    }
}
