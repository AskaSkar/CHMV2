<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storeagenda_contentRequest;
use App\Http\Requests\Updateagenda_contentRequest;
use App\Models\agendaContent;

class AgendaContentController extends Controller
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
    public function store(Storeagenda_contentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(agendaContent $agenda_content)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(agendaContent $agenda_content)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updateagenda_contentRequest $request, agendaContent $agenda_content)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(agendaContent $agenda_content)
    {
        //
    }
}
