<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Agenda extends Model
{
    /** @use HasFactory<\Database\Factories\AgendaFactory> */
    use HasFactory;
    protected $fillable = [
        'id',
        'company_id',
        'event_id',
        'date',
    ];
    protected $appends = [
        'id_code',
    ];
    public function getIdCodeAttribute()
    {
        $user = Auth::user();
        $id_json=json_encode(array('id' =>$this->id,'token'=> $user->last_token));
        return base64_encode($id_json);
    }
    public function agendaContents(){
        return $this->hasMany( AgendaContent::class);
    }
}
