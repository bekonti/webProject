<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name',
        'email',
        'password',
        'name',
        'surname',
        'birth_date',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @var mixed
     */


    public function getName(){
        if($this->name && $this->surname){
            return "{$this->name} {$this->surname}";
        }
        if($this->surname){
            return "{$this->surname}";
        }

        return null;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getNameOrLogin(){
        return $this->getName() ?: $this->email;
    }

    public function isChild(){
        return $this->birth_date;
    }
}
