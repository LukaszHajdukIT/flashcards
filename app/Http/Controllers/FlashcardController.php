<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{Set, Flashcard};


class FlashcardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('flashcards.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $input = $request->all();
      $user = Auth::user();
      $set = Set::where('id', $input['set_id'])
      ->where('user_id', $user->id)
      ->firstOrFail();

      $flashcard = Flashcard::create([
        'term' => $input['term'],
        'definition' => $input['definition'],
        'set_id' => $set->id
      ]);

      return redirect()
      ->route('sets.show', $set->id)
      ->with('status', 'Congratulations! Set was succesfully created.');
    }

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $input = $request->all();
        $user = Auth::user();
        $set = Set::where('id', $input['set_id'])
        ->where('user_id', $user->id)
        ->firstOrFail();

        $flashcard = Flashcard::where('id', $id)
        ->where('set_id', $set->id)
        ->firstOrFail();

        $flashcard->delete();

        return redirect()
        ->route('sets.show', $set->id)
        ->with('status', 'Congratulations! Set was succesfully created.');

    }
}
