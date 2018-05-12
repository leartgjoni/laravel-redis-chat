<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    public function messages()
    {
        return $this->hasMany('App\Message')->orderBy('created_at', 'asc');
    }
    public function user1()
    {
        return $this->belongsTo('App\User','user1');
    }
    public function user2()
    {
        return $this->belongsTo('App\User','user2');
    }
}
