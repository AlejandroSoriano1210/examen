<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class XXXXXX extends Model
{
    /** @use HasFactory<\Database\Factories\LibroFactory> */
    use HasFactory;

    protected $fillable = ['XXX', 'XXXX', 'XXXXX'];

    function xxs(){
        return $this->hasMany(XX::class);
    }
}
