<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barangM extends Model
{
    use HasFactory;
    protected $table = 'barang';
    public $timestamps = false;
    protected $guarded = [];
    protected $primaryKey = 'id_barang';
}
