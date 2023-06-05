<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gudangbaksoM extends Model
{
    use HasFactory;
    protected $table = 'gudangbakso';
    public $timestamps = false;
    protected $guarded = [];
    protected $primaryKey = 'id_gudang_bakso';
}
