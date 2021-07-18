<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class portfolio extends Model
{

    protected $table="Portfolio";
    public $timestamps = false;

    public function services(){
        return $this->belongsTo('App\services','services_id');
    }
    

    public function images(){
        return $this->hasMany('App\portfolioImage','prortfolio_id');
    }

    
}
