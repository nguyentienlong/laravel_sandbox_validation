<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    protected $fillable = ['name', 'phone_number', 'class_id'];

    public function class()
    {
        return $this->belongsTo('App\Models\Clazz');
    }
}
