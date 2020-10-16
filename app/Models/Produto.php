<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    public function marca (){
        //belongsTo eh para expressar relacionamenho de muitos para 1
        return $this->belongsTo("App\Models\Marca");
    }

    public function departamentos(){
        //belongsToMany eh para expressar relacionamenho de muitos para muitos
        return $this->belongsToMany("App\Models\Departamento",'produto_departamento');
        //digitado nome da tabela pois convesao laravel pedi ordem alfabetica
    }
}
