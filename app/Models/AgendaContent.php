<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class AgendaContent extends Model
{
    /** @use HasFactory<\Database\Factories\AgendaContentFactory> */
    use HasFactory;
    protected $fillable = [
        'id',
        'company_id',
        'agenda_id',
        'time_from',
        'time_to',
        'where',
        'title',
        'speakers',
        'presenters',
        'description',
        'quiz',
        'online',
    ];
    public function getIdCodeAttribute()
    {
        $user = Auth::user();
        $id_json=json_encode(array('id' =>$this->id,'token'=> $user->last_token));
        return base64_encode($id_json);
    }
}
