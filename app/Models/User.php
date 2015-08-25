<?php

namespace Ik47\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $guarded = ['id'];

    public function posts()
    {
        return $this->hasMany('Ik47\Models\Post');
    }

    public function gists()
    {
        return $this->hasMany('Ik47\Models\Gist');
    }
}
