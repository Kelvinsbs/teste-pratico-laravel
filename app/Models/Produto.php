<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    public $timestamps = false;

    // protected $table = 'produtos';
    protected $fillable = ['id', 'codigo', 'descricao', 'quantidade', 'preco'];

    // public function consultaProdutos(){
    //     $results = DB::select('select * from produtos');
    // }
}
