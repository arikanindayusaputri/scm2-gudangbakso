<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenisbaksoM extends Model
{
    use HasFactory;
    protected $table = 'jenisbakso';
    public $timestamps = false;
    protected $guarded = [];
    protected $primaryKey = 'id_jenis_bakso';
}
