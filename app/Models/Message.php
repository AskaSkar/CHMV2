<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Message extends Model
{
    /** @use HasFactory<\Database\Factories\MessageFactory> */
    use HasFactory;
    protected $fillable = [
        'id',
        'type',
        'publish_date',
        'publish_time',
        'title',
        'message',
        'picture',
        'user_id',
        'company_id',
        'highlight_entry',
        'block_comments',
        'block_reactions',
        'who_can_see',
        'event_id',
        'material_id',
        'academy_material_id',
    ];
    protected $appends = [
        'picture_url',
        'id_code',
    ];
    protected $hidden = [
        'picture',
    ];
    public function getPictureUrlAttribute()
    {
        if (!$this->picture) {
            return null;
        }
        return asset('images'.DIRECTORY_SEPARATOR.$this->picture);
    }
    public function getIdCodeAttribute()
    {
        $user = Auth::user();
       $id_json=json_encode(array('id' =>$this->id,'token'=> $user->last_token));
       return base64_encode($id_json);
    }
    public function reads() {
        return $this->belongsTo(MessageUserRead::class);
    }
}
