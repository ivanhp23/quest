<?php

namespace Cinema;

use Illuminate\Database\Eloquent\Model;

class Modulos extends Model
{
    protected $table ="modulos";

    protected $fillable =['nombre_modulo', 'email', 'password'];
    protected $hidden = ['password'];

    public function setPasswordAttribute($valor)
    {
        if(!empty($valor)){
            $this->attributes['password']=\Hash::make($valor);
        }

    }


}
