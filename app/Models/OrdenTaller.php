<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenTaller extends Model
{
    use HasFactory;
    protected $table = 'fac_remi';
    public $timestamps = false;

    // Especificamos las columnas que componen la llave primaria
    protected $primaryKey = 'serial_fac';
}
