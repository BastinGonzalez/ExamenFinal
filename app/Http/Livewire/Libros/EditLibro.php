<?php

namespace App\Http\Livewire\Libros;

use App\Models\Libro;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditLibro extends Component
{
   use WithFileUploads;
    public Libro $libro;
    public $foto;
    public function render()
    {
        return view('livewire.libros.edit-libro');
    }
    public function edit(){
        $this->validate();
        if($this->foto != null){
            if($this->libro->foto !=null){
                Storage::disk('public')->delete($this->libro->foto);
            }
            $this->libro->foto = Storage::disk('public')->put('images/libros',$this->foto);
        }
        $this->libro->save();
        return redirect(route('indexLibros'));
    }
    protected function rules(){
        return rules::rulesCurso();
    }
}
