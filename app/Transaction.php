<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    public function user() {
        return $this->belongsTo('\App\User');
    }

    public function public_item()
    {
        return $this->belongsTo('\App\PublicItem');
    }

}
