<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class newpost extends Model
{
    use HasFactory;
    protected $table='newpost';
    protected $fillable=[
        'name',
        'message',
        'time'
    ];
}
