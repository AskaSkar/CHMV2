<?php

namespace App\Http\Controllers\UserNew;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserNewReadRequest;
use App\Http\Requests\UpdateUserNewReadRequest;
use App\Models\UserNewRead;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class UserNewReadController extends Controller
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
    public function create($user_new_id_code): JsonResponse
    {
        $user = Auth::user();
        $user_new_id=json_decode(base64_decode($user_new_id_code))->id;
        $read=UserNewRead::where('user_id',$user->id)->where('user_new_id',$user_new_id)->first();
        if ($read === null) {
            UserNewRead::create([
                'user_id' => $user->id,
                'user_new_id' => $user_new_id,
                'company_id' => $user->company_id,
            ]);

        }
        return $this->emptyResponse();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserNewReadRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UserNewRead $userNewRead)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserNewRead $userNewRead)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserNewReadRequest $request, UserNewRead $userNewRead)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserNewRead $userNewRead)
    {
        //
    }
}
