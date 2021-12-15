<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class CreateUsuario extends Component
{
    public function mount(){
        $this->usuario = new Usuario();
    }
    use WithFileUploads;
    public Usuario $usuario;
    public $foto;
    public $confirm_password;
    public $password;
    public function render()
    {
        return view('livewire.usuarios.create-usuario');
    }
    public function create()
    {
        $this->validate();
        $this->usuario->password = Hash::make($this->password);
        if($this->foto != null){
        $this->usuario->foto = Storage::disk('public')->put('images/usuarios',$this->foto);
        }
        $this->usuario->save();
        return redirect(route('indexUsuarios'));

    }
    protected function rules(){
        return rules::rulesUsuario();
    }
}


