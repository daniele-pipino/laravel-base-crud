<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comic = new Comic();
        return view('comics.create', compact('comic'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // validation dati prima di mandarli al form
        $request->validate([
            'title' => 'required|string|unique:comics|min:2',
            'series' => 'required|string|min:2',
            'price' => 'required|numeric|min:3',
            'type' => 'required|string|min:2|max:15',
        ]);

        // recuperiamo i dati dal form
        $data = $request->all();

        // istanziamo un nuovo fumetto con inuovi dati
        $new_comic = new Comic;
        $new_comic->title = $data['title'];
        $new_comic->series = $data['series'];
        $new_comic->price = $data['price'];
        $new_comic->description = $data['description'];
        $new_comic->type = $data['type'];
        $new_comic->thumb = $data['thumb'];
        $new_comic->sale_date = $data['sale_date'];

        // salviamo i nuovi dati sul database
        $new_comic->save();

        // ritorniamo il risultato del nuovo comics
        return redirect()->route('comics.show', $new_comic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findorFail($id);
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
        $comic = Comic::findorFail($id); // o dependency ingection
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {

        // validazione dati

        $request->validate([
            'series' => 'required|string|min:2',
            'price' => 'required|numeric|min:3',
            'type' => 'required|string|min:2|max:15',
            'title' => ['required', 'string', Rule::unique('comics')->ignore($comic->id), 'min:2', 'max:100'],
        ]);

        $data = $request->all();

        $comic->update($data);

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index')->with('type', 'danger')->with('msg', "$comic->title eliminata con successo");
    }

    public function trash()
    {
        $comics = Comic::onlyTrashed()->get();

        return view('comics.trash', compact('comics'));
    }

    public function restore($id)
    {
        $comic = Comic::withTrashed()->find($id);
        $comic->restore();
        return redirect()->route('comics.index')->with('type', 'success')->with('msg', "Il fumetto $comic->title è stato reinserito");
    }
}
