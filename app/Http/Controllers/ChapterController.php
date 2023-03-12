<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use Error;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $chapters = Chapter::all();
        return view('dashboard.chapters', compact('chapters'));
    }

    public function addChapter(){

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
    public function store(Request $request){
        try{
        $request->validate(
            [
            
            // 'title'  => 'required',
            'chapterName' => 'required',
            'state' => 'required',
            'status' => 'required',
            // 'membershipID' => 'required',
            'address' => 'required',
            ]
            );

        $user = Chapter::updateOrCreate([
            'name'  => $request->chapterName,
            'state' => $request->state,
            'address' => $request->address,
            'status' => $request->status,
        ]);
        
        if($user){
            return view('dashboard.addChapter');//response()->json($user, 200);//
        }else{
            return response()->json(["message" => "record not stored"], 404);
        }
    }catch (ModelNotFoundException $error) {
        return response()->json(['message'=> 'Endpoint not found.', 'error'=> $error]);
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        try{
        $chapter = Chapter::findOrFail();
        if($chapter){
            return view('dashboard.viewChapter');
        }else{
            return view('dashboard.viewChapter');
        }
    }catch (ModelNotFoundException $error) {
        return response()->json(['message'=> 'Endpoint not found.', 'error'=> $error]);
    }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function edit(Chapter $chapter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chapter $chapter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $chapter = Chapter::find($id);
        if($chapter){
            $chapter->destroy();
            return response()->json(['message'=> 'chapter deleted successfully']);
        }
    }
}
