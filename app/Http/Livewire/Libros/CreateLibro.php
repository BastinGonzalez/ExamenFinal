<?php

namespace App\Http\Livewire\Libros;

use Livewire\Component;
use App\Models\Libro;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class CreateLibro extends Component
{

    public function mount(){
        $this->libro = new Libro();
    }
    use WithFileUploads;
    public Libro $libro;
    public $foto;

    public function render()
    {
        return view('livewire.libros.create-libro');
    }

    public function create()
    {
        $this->validate();
        if($this->foto != null){
        $this->libro->foto = Storage::disk('public')->put('images/libros',$this->foto);
        }
        $this->libro->save();
        return redirect(route('indexLibros'));

    }
    protected function rules(){

        return rules::rulesCurso();
    }
}
