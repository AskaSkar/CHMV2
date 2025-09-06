<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acceptance extends Model
{
    /** @use HasFactory<\Database\Factories\AcceptanceFactory> */
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'content',
        'value',
    ];
}
