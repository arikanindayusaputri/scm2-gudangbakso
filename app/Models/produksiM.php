<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produksiM extends Model
{
    use HasFactory;
    protected $table = 'produksi';
    public $timestamps = false;
    protected $guarded = [];
    protected $primaryKey = 'id_produksi';
}
