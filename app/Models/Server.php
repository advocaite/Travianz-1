<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    protected $guarded = [];

    public function language(){
        return $this->belongsTo(Languages::class);
    }
}
