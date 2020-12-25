<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, $input)
 */
class Route extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [];

    private static $whiteListFilter = ['*'];

    public function trains()
    {
        return $this->belongsToMany(Train::class);
    }

    public function stations()
    {
        return $this->hasMany(Station::class);
    }
}
