<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trains extends Model
{
    public $timestamps = false;
    use HasFactory;

    public function routes(){
        return $this->belongsToMany(Routes::class);
    }
}
