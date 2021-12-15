<?php

namespace App\Http\Livewire\Libros;

class rules
{
    public static function rulesCurso(){
        return [
            'libro.nombrel'=> 'required',
            'libro.autor'=> 'required',
            'libro.año'=>'required|numeric',
            'libro.precio'=>'required|numeric',
            'foto'=>'nullable|image'
            ];
    }

}
