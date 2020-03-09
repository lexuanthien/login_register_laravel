<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable; //Dung cho phan PostLogin

class User extends Authenticatable
{
    protected $fillable = ["name", 'email', 'password'];
    protected $dates = ['deleted_at'];

    public $timestamps = false;

    public function setAttribute($key, $value)
    {
        $isRememberTokenAttribute = $key == $this->getRememberTokenName();
            if (!$isRememberTokenAttribute)
            {
            parent::setAttribute($key, $value);
            }
        
    }
}
