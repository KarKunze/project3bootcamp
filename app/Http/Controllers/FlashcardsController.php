<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlashcardsController extends Controller
{

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
      $flashcards = \App\Flashcard::orderBy('term')->where('creator_id', '=', auth()->user()->id)->get();
      return view('cards', compact('flashcards'));
    }


    // public function show()
    // {
    //     $flashcards = \App\Flashcard::orderBy('term')->where('creator_id', '=', auth()->user()->id)->get();
    //     return view('cards', compact('flashcards'));
    // }


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
            'flashcardTerm' => 'required',
            'flashcardDescription' => 'required',
        ]);

        $flashcard = new \App\Flashcard;
        $flashcard->term = $request->input('flashcardTerm');
        $flashcard->description = $request->input('flashcardDescription');
        $flashcard->creator_id = \Auth::user()->id;
        $flashcard->save();
        // $request->session()->flash('status', 'Flashcard created!');
        return redirect()->route('cards.index');
    }

    // public function update(Request $request, $id)
    // {
    //
    //     $validatedData = $request->validate([
    //         'flashcardTerm' => 'required',
    //         'flashcardDescription' => 'required',
    //     ]);
    //
    //     $flashcard = new \App\Flashcard;
    //     $flashcard->term = $request->input('flashcardTerm');
    //     $flashcard->description = $request->input('flashcardDescription');
    //     $flashcard->save();
    //     $request->session()->flash('status', 'Flashcard created!');
    //     return redirect()->route('cards.index');
    // }

    public function destroy(Request $request, $id)
    {
        $card=\App\Flashcard::find($id);
        $card->delete();
        $request->session()->flash('status', 'Flashcard deleted!');
        return redirect()->route('cards.index');
    }
}
