<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddedItem extends Model
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
