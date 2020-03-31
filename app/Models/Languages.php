<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Languages extends Model
{
    public const DEFAULT_ID = 1;

    public function servers()
    {
        return $this->belongsTo(Server::class);
    }
}
