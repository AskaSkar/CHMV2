<?php

namespace App\Http\Controllers\Academy;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAcademyMaterialRequest;
use App\Http\Requests\UpdateAcademyMaterialRequest;
use App\Models\AcademyMaterial;
use Illuminate\Support\Facades\Auth;

class AcademyMaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($category_id_code)
    {
        $user = Auth::user();
        $category_id=json_decode(base64_decode($category_id_code))->id;
        $academy_materials=AcademyMaterial::where('id_academy_category',$category_id)
            ->orderBy('publication_date','desc')->get();
        $i=0;
        $academy_matrial_ar=array();
        foreach ($academy_materials as $academy_material) {
            $academy_matrial_ar[$i]['id']=$academy_material->id_code;
            $academy_matrial_ar[$i]['name']=$academy_material->name;
            $academy_matrial_ar[$i]['file_type']=$academy_material->type;
            $academy_matrial_ar[$i]['link']=$academy_material->link_url;
            $academy_matrial_ar[$i]['publication_date']=$academy_material->publication_date;
            $i++;
        }
        $array['academy_materials']=$academy_matrial_ar;
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
    public function store(StoreAcademyMaterialRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AcademyMaterial $academyMaterial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AcademyMaterial $academyMaterial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAcademyMaterialRequest $request, AcademyMaterial $academyMaterial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AcademyMaterial $academyMaterial)
    {
        //
    }
}
