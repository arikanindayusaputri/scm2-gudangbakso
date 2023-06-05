<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class outletM extends Model
{
    use HasFactory;
    protected $table = 'outlet';
    public $timestamps = false;
    protected $guarded = [];
    protected $primaryKey = 'id_outlet';
}
