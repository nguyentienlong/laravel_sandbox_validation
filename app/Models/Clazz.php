<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clazz extends Model
{
    protected $table = 'classes';

    protected $fillable = ['name', 'year'];

    public function students()
    {
        return $this->hasMany('App\Models\Student');
    }
}
