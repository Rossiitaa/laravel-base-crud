<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    protected $validationRules = [
        'title' => 'required|string|min:3|max:255|unique:comics,title',
        'description' => 'required|string|min:3',
        'thumb' => 'required|url',
        'price' => 'required|numeric',
        'series' => 'required|string|max:255',
        'sale_date' => 'required|date',
        'type' => 'required|max:50',
    ];


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sentData = $request->validate($this->validationRules);
        
        $comic = new Comic();
        $comic->fill($sentData);
        $comic->save();

        return redirect()->route('comics.show', $comic->id)->with('create', $sentData['title']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::FindOrFail($id);
        return view('comics.edit', compact('comic'));
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
        $sentData = $request->validate($this->validationRules);

        $comic = Comic::FindOrFail($id);
        $comic->update($sentData);

        return redirect()->route('comics.index')->with('update', $sentData['title']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::FindOrFail($id);
        $comic->delete();

        return redirect()->route('comics.index')->with('delete', $comic->title);
    }
}
