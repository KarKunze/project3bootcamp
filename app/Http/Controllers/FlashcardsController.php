<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlashcardsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $flashcards = \App\Flashcard::all();
      return view('cards', compact('flashcards'));
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

        $validatedData = $request->validate([
            'flashcardTerm' => 'required|unique:flashcards,term',
            'flashcardDescription' => 'required',
        ]);

        $flashcard = new \App\Flashcard;
        $flashcard->term = $request->input('flashcardName');
        $flashcard->description = $request->input('flashcardDescription');
        $flashcard->save();
        $request->session()->flash('status', 'Flashcard created!');
        return redirect()->route('flashcards.index');
    }
    //
    // public function update(Request $request, $id)
    // {
    //
    //   $validatedData = $request->validate([
    //       'flashcardTerm' => 'required|unique:flashcards,term',
    //       'flashcardDescription' => 'required',
    //   ]);
    //
    //   $flashcard = new \App\Flashcard;
    //   $flashcard->term = $request->input('flashcardName');
    //   $flashcard->description = $request->input('flashcardDescription');
    //   $flashcard->save();
    //   $request->session()->flash('status', 'Flashcard created!');
    //   return redirect()->route('flashcards.index');
    // }
    //
    // public function destroy(Request $request, $id)
    // {
    //     \App\Flashcard::destroy($id);
    //     $request->session()->flash('status', 'Flashcard deleted!');
    //     return redirect()->route('flashcards.index');
    // }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {

    }
}
