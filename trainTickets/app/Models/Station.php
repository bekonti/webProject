<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [];


//    public function routes(){
//        return $this->belongsTo(Route::class);
//    }

}
