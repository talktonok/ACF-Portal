<?php

namespace App\Http\Controllers;

use App\Models\Dues;
use Illuminate\Http\Request;

class DuesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dues = Dues::all();
        return response()->json($dues);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $due = Dues::create($request->all());
        return response()->json($due, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dues  $dues
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $due = Dues::findOrFail($id);
        return response()->json($due);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dues  $dues
     * @return \Illuminate\Http\Response
     */
    public function edit(Dues $dues)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dues  $dues
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $due = Dues::findOrFail($id);
        $due->update($request->all());
        return response()->json($due, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dues  $dues
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $due = Dues::findOrFail($id);
        $due->delete();
        return response()->json(null, 204);
    }
}
