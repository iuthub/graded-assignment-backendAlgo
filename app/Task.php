<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['name'];
    //created_at and updated_at
    //$timestamps = false
    //$connection = 'mysql2'
    //$primaryKey = 'passportNumber'

    public function user() {
        return $this->belongsTo('App\User'); 
    }
}
