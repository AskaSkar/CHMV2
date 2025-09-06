<?php

namespace App\Http\Controllers\UserNew;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateCommentRequest;
use App\Http\Requests\UserNew\StoreCommentRequest;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
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
    public function store(StoreCommentRequest $request,$user_new_id_code)
    {
        $user = Auth::user();
        $user_new_id=json_decode(base64_decode($user_new_id_code))->id;
        Comment::create([
            'user_id' => $user->id,
            'user_new_id' => $user_new_id,
            'company_id' => $user->company_id,
            'message' => $request->message,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommentRequest $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
