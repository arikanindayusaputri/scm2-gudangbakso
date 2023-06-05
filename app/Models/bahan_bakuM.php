<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bahan_bakuM extends Model
{
    use HasFactory;
    protected $table = 'bahan_baku';
    public $timestamps = false;
    protected $guarded = [];
    protected $primaryKey = 'id_bahan_baku';
}
