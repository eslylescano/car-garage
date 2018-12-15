<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataServices extends Model
{
    //
    public function service()
    {
        return $this->belongsTo('App\Service');
    }
}
