<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Location extends Model
{
    /** @use HasFactory<\Database\Factories\LocationFactory> */
    use HasFactory;
    protected $fillable = array(
        'loc_name',
        'loc_stars',
        'loc_city',
        'loc_street',
        'loc_zip_code',
        'lat',
        'lon',
        'image',
        'loc_phone',
        'loc_email',
        'loc_web',
        'is_restaurant',
        'is_hotel'
    );
    protected $appends = [
        'image_url',
        'id_code',
    ];
    protected $hidden = [
        'image',
    ];
    public function getImageUrlAttribute()
    {
        if (!$this->image) {
            return null;
        }

        return asset('images'.DIRECTORY_SEPARATOR.$this->image);
    }
    public function getIdCodeAttribute()
    {
        $user = Auth::user();
        $id_json=json_encode(array('id' =>$this->id,'token'=> $user->last_token));
        return base64_encode($id_json);
    }
}
