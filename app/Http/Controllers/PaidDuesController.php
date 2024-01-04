<?php

namespace App\Http\Controllers;

use App\Models\PaidDues;
use Illuminate\Http\Request;

class PaidDuesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paidDues = PaidDues::all();
        return response()->json($paidDues);
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
        $paidDue = PaidDues::create($request->all());
        return response()->json($paidDue, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaidDues  $paidDues
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paidDue = PaidDues::findOrFail($id);
        return response()->json($paidDue);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaidDues  $paidDues
     * @return \Illuminate\Http\Response
     */
    public function edit(PaidDues $paidDues)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PaidDues  $paidDues
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $paidDue = PaidDues::findOrFail($id);
        $paidDue->update($request->all());
        return response()->json($paidDue, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaidDues  $paidDues
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paidDue = PaidDues::findOrFail($id);
        $paidDue->delete();
        return response()->json(null, 204);
    }
}
