<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

// Atributo para realizar mutadores para modificar la info que se guarda en la BD
use Illuminate\Database\Eloquent\Casts\Attribute;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected function name():Attribute{
        return new Attribute(
            get: function($value){
                return ucwords($value);
            },
            set: fn($value)=> strtolower($value) // Se puede ahorrar código utilizando funciones flecha
        );
    }

    // En anteriores proyectos de laravel 8 se realizaban los mutadores y accesores así:
    /*public function getNameAttribute($value){
        return ucwords($value);
    }
    public function setNameAttirbute($value){
        $this->attributes['name'] = strtolower($value);
    }*/
}
