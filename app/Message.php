<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
	protected $table='message';
    protected $fillable = [
         'subject', 'message','member_id', 'user_id'
    ];
    
}
