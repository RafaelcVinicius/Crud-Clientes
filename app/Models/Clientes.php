<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Clientes extends Model
{
    use HasFactory;

    protected $tables = 'clientes';
    protected $primarykey = 'id';
    public $timestamps = false;
    

    public function consultar() {
        $clientes = self::where('id_user', '=', Auth::id())->get();

        return ($clientes);
    }
}
