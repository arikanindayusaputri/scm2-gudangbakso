<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loginM extends Model
{
    use HasFactory;
    protected $table = 'login';
    public $timestamps = false;
    protected $guarded = [];
    protected $primaryKey = 'username';
    protected $keyType = 'string';
}
