<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract_detail extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User','client_id');
    }
}
