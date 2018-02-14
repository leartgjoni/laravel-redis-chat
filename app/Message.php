<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'text'
    ];

    public function conversation()
    {
        return $this->belongsTo('App\Conversation');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
