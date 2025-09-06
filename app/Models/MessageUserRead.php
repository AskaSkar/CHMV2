<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageUserRead extends Model
{
    /** @use HasFactory<\Database\Factories\MessageUserReadFactory> */
    use HasFactory;
    protected $fillable = array(
        'message_id',
        'user_id',
    );
}
