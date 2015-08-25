<?php

namespace Ik47\Models;

use Illuminate\Database\Eloquent\Model;

class Gist extends Model
{
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo('Ik47\Models\User');
    }
}
