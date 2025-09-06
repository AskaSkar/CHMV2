<?php

namespace App\Http\Controllers\Material;

use App\Enums\MaterialType;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMaterialRequest;
use App\Http\Requests\UpdateMaterialRequest;
use App\Models\Event;
use App\Models\Material;
use Illuminate\Support\Facades\Auth;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $matrials=Material::where('company_id',$user->company_id)->orderBy('publication_date','desc')->get();
        $i=0;
        $matrial_ar=array();
        foreach ($matrials as $matrial) {
            $matrial_ar[$i]['id']=$matrial->id_code;
            $matrial_ar[$i]['name']=$matrial->name;
            $matrial_ar[$i]['file_type'] =  $matrial->type;
            if ($matrial->type==1 || $matrial->type==2 ) {
                $matrial_ar[$i]['link'] = $matrial->link_url;
            } else {
                $matrial_ar[$i]['link'] = $matrial->link;
            }
            $matrial_ar[$i]['publication_date']=$matrial->publication_date;
            if ($matrial->event_id != NULL) {
                $matrial_ar[$i]['type'] = MaterialType::EVENT_MATERIAL->value;
                $mat_event=Event::find($matrial->event_id);
                $matrial_ar[$i]['event_title']=$mat_event->name;
                $matrial_ar[$i]['date_from']=$mat_event->date_from;
                $matrial_ar[$i]['date_to']=$mat_event->date_to;
            } else {
                $matrial_ar[$i]['type'] = MaterialType::GENERAL_MATERIAL->value;
            }
            $i++;
        }
        $array['materials']=$matrial_ar;
        return $this->successResponse($array);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMaterialRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Material $material)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Material $material)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMaterialRequest $request, Material $material)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Material $material)
    {
        //
    }
}
