<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;
    //Se o nome de seu model eh Marca, o Laravel
    //infere que o nome da tabela, ligada a esse
    //model, se chama 'MarcaS', no plural. Essa eh
    //uma convencao de nomeclatura do laravel
    //que visa facilitar a utlizacao de ORM.
    //porem, se sua tabelanao se cham 'MarcaS',
    //voce pode utilizar o atributo abaixo para
    //indicar ao laravel qual o nome correto da
    //tabela.
    protected $table = 'marcas';

    //para o programador criar dados direto na tabela
    //por comando direto, eh necessario definir quais campos
    //isso pode ser feito pelo exemplo abaixo.
    protected $fillable = ['nome'];
}
