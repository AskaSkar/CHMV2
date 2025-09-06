<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class PhotoBooth extends Model
{
    /** @use HasFactory<\Database\Factories\PhotoBoothFactory> */
    use HasFactory;
    protected $fillable = array(
        'id',
        'image',
        'user_id',
        'company_id',
        'event_id',
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
