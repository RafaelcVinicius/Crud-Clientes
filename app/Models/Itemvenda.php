<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Itemvenda extends Model
{
    use HasFactory;
    protected $table = 'itemvenda';
    protected $primarykey = 'id';
    public $timestamps = false;


public function produto(){
    return $this->HasOne(Produtos::class, 'id', 'id_produto');
}

public function item($id){
    return self::where('id_venda', '=', $id)->get();
}


}