<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PublicItem extends Model
{
    //

    public function transaction()
    {
        return $this->hasOne('\App\Transaction');
    }


}
