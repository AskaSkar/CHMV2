<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationsEvent extends Model
{
    /** @use HasFactory<\Database\Factories\LocationsEventFactory> */
    use HasFactory;
    protected $fillable = array(
        'event_id',
        'location_id',
        'loc_date_time',
        'descr_header',
        'descr',
        'lp'
    );
}
