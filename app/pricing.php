<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pricing extends Model
{
    
    protected $table="pricing";
    public $timestamps = false;

    public function service(){
        return $this->belongsTo('App\services','services');
    }
    
    
}
