<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LogReplyFacebook extends Model
{
    public $fillable = [
        'message',
        'sender_id'
    ];
}
