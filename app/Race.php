<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    protected $table = 'races';

    protected $fillable = [
        'name', 'description'
    ];

    public function dogs()
    {
        return $this->hasMany(Dog::class);
    }
}
