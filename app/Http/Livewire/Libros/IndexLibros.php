<?php

namespace App\Http\Livewire\Libros;

use Livewire\Component;
use App\Models\Libro;
use Livewire\WithPagination;

class IndexLibros extends Component
{
    use WithPagination;
    protected $paginationTheme='bootstrap';
    public $search;
    public $cargado = false;
    public function render()
    {

        $libros = ($this->cargado == true ) ? Libro::where('nombrel', 'LIKE','%' . $this->search . '%')
        ->orwhere('autor', 'LIKE','%' . $this->search . '%')
        ->orwhere('año', 'LIKE','%' . $this->search . '%')
        ->orwhere('precio', 'LIKE','%' . $this->search . '%')
        ->orderBy('id')->paginate(10) : [];

        return view('livewire.libros.index-libros',compact('libros'));
    }
    public function cargando(){
        $this->cargado = true;
    }

    public function updatingSearch(){
        $this->resetPage();
    }

}
