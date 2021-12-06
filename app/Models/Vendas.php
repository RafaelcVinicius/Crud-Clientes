<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Vendas extends Model
{
    use HasFactory;

    protected $table = 'vendas';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function itens(){
        return $this->hasMany(Itemvenda::class, 'id_venda', 'id');
    }

    public function cliente(){
        return $this->hasOne(Clientes::class, 'id', 'id_cliente' );
    }

    public function consultar() {
        $vendas = self::where('id_user', '=', Auth::id())->get();

        return ($vendas);
    }
}
