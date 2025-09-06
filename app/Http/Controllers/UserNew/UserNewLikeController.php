<?php

namespace App\Http\Controllers\UserNew;

use App\Enums\LikeType;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserNewLikeRequest;
use App\Http\Requests\UserNew\StoreUserNewLikeRequest;
use App\Models\UserNewLike;
use Illuminate\Support\Facades\Auth;

class UserNewLikeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($user_new_id_code)
    {
        //
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
    public function store(StoreUserNewLikeRequest $request,$user_new_id_code)
    {
        $user = Auth::user();
        $user_new_id=json_decode(base64_decode($user_new_id_code))->id;
        $reactions=UserNewLike::where('user_id',$user->id)->where('user_new_id',$user_new_id)->first();
        if ($reactions === null) {
            UserNewLike::create([
                'user_id' => $user->id,
                'user_new_id' => $user_new_id,
                'company_id' => $user->company_id,
                'like_type' => $request->reaction_type,
            ]);
        } else {
            $reactions->like_type=$request->reaction_type;
            $reactions->save();
        }
        return $this->emptyResponse();
    }

    /**
     * Display the specified resource.
     */
    public function show(UserNewLike $userNewLike)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserNewLike $userNewLike)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserNewLikeRequest $request, UserNewLike $userNewLike)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserNewLike $userNewLike)
    {
        //
    }
}
