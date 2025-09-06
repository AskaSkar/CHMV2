<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Material extends Model
{
    /** @use HasFactory<\Database\Factories\MaterialFactory> */
    use HasFactory;
    protected $fillable = array(
        'id',
        'link',
        'name',
        'event_id',
        'type',
        'id_group',
        'lp',
        'agenda_content_id',
        'user_id',
        'therapeutic_area',
        'material_category',
        'rating',
        'is_doctor',
        'material_qrcode',
        'company_id',
        'publication_date',
    );
    protected $appends = [
        'link_url',
        'id_code',
    ];
    protected $hidden = [
        'link',
    ];
    public function getLinkUrlAttribute()
    {
        if (!$this->link) {
            return null;
        }

        return asset('materials'.DIRECTORY_SEPARATOR.$this->link);
    }
    public function getIdCodeAttribute()
    {
        $user = Auth::user();
        $id_json=json_encode(array('id' =>$this->id,'token'=> $user->last_token));
        return base64_encode($id_json);
    }



}
