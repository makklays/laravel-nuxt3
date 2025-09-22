<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $table = 'user_profiles';
    public $timestamps = true;

    protected $fillable = [
        'id',
        'name',
        'country',
        'address',
        'postcode',
        'id_code',
        'birthday', // date
        'facebook', // url, nullable
        'linkedin', // url, nullable
        'phones' => 'array', // json: масив телефонів, nullable
        'mobile', // string, nullable
        'home', // string, nullable
        'id_photo' => 'boolean', // boolean
        'interests' => 'array', // json: масив обраних інтересів, nullable
        'email',
        'password', // bcrypt-хеш
    ];

}

