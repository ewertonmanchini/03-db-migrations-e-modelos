<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    public function produtos(){
        //belongsToMany eh para expressar relacionamenho de muitos para muitos
        return $this->belongsToMany("App\Models\Produtos",'produto_departamento');
        //digitado nome da tabela pois convesao laravel pedi ordem alfabetica
    }
}
