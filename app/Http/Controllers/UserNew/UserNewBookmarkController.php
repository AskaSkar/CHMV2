<?php

namespace App\Http\Controllers\UserNew;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserNewBookmarkRequest;
use App\Http\Requests\UpdateUserNewBookmarkRequest;
use App\Models\UserNew;
use App\Models\UserNewBookmark;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class UserNewBookmarkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
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
    public function store($user_new_id_code): JsonResponse
    {
        $user = Auth::user();
        $user_new_id=json_decode(base64_decode($user_new_id_code))->id;
        $bookmark=UserNewBookmark::where('user_id',$user->id)->where('user_new_id',$user_new_id)->first();
        if ($bookmark === null) {
            UserNewBookmark::create([
                'user_id' => $user->id,
                'user_new_id' => $user_new_id,
                'company_id' => $user->company_id,
            ]);
        } else {
            $bookmark->delete();
        }
        return $this->emptyResponse();
    }

    /**
     * Display the specified resource.
     */
    public function show(UserNewBookmark $userNewBookmark)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserNewBookmark $userNewBookmark)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserNewBookmarkRequest $request, UserNewBookmark $userNewBookmark)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserNewBookmark $userNewBookmark)
    {
        //
    }
}
