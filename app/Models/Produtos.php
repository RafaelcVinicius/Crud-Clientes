<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Produtos extends Model
{
    use HasFactory;

    protected $tables = 'produtos';
    public $timestamps = false;

    public function consultar() {
        $produtos = self::where('id_user', '=', Auth::id())->get();

        return ($produtos);
    }
}
