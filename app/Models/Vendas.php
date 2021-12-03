<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Vendas extends Model
{
    use HasFactory;

    protected $tables = 'vendas';
    public $timestamps = false;

    public function consultar() {
        $vendas = self::where('id_user', '=', Auth::id())->get();

        return ($vendas);
    }
}
