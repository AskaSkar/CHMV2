<?php

namespace App\Http\Controllers\Academy;

use App\Enums\AcademyCategoryType;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAcademyCategoryRequest;
use App\Http\Requests\UpdateAcademyCategoryRequest;
use App\Models\AcademyCategory;
use Illuminate\Support\Facades\Auth;

class AcademyCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($category_type)
    {
        $user = Auth::user();
        $categories=AcademyCategory::where('company_id',$user->company_id)->where('type',$category_type)->where('parent_category_id','<>',0)->get();
        $academy_category_ar=array();
        $i=0;
        foreach ($categories as $category) {
            $academy_category_ar[$i]['id']=$category->id_code;
            $academy_category_ar[$i]['name']=$category->name;
            $i++;
        }
        $array['categories']=$academy_category_ar;
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
    public function store(StoreAcademyCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AcademyCategory $academyCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AcademyCategory $academyCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAcademyCategoryRequest $request, AcademyCategory $academyCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AcademyCategory $academyCategory)
    {
        //
    }
}
