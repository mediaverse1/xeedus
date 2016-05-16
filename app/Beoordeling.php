<?php

namespace Xeedus;

use Illuminate\Database\Eloquent\Model;

class Beoordeling extends Model
{
    //
    public function video()
    {
        return $this->belongsTo('Xeedus\Video');
    }

    public function user()
    {
        return $this->belongsTo('Xeedus\User');
    }
}
