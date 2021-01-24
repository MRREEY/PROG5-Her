<?php

namespace App\Http\Controllers;

use App\AnimesItem;
use App\Category;
use Illuminate\Http\Request;

class AnimesItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animesItem = AnimesItem::latest()->get();

        return view('animes.index', ['animes' => $animesItem]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        //Persist the new resource.

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
            //'genre' => ['exist:genres,id'],

        ]);

        // $tag = new Tag();
        // $tag = $request->all();
        $animesItems = new AnimesItem();
        $animesItems->title = $request->get('title');
        $animesItems->description = $request->get('description');
        $animesItems->image = $request->get('image');
        $animesItems->category_id = $request->get('category');

        $animesItems->save();
        // $tag->save();
        return redirect('/')->with('succes', 'Anime is opgeslagen!');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Show a single resource.

        $animesItem = AnimesItem::findOrFail($id);
        if ($animesItem === null) {
            abort(404, "Deze anime item is helaas niet gevonden");
        }

        return view('anime', compact('animesItem'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $animesItems = AnimesItem::find($id);
        return view('edit',
            compact('animesItems'), [
                'categories' => Category::all()]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        request()->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        //Persist the edited resource.
        $animesItems = AnimesItem::find($id);
        $animesItems->title = request('title');
        $animesItems->description = request('description');
        $animesItems->image = request('image');
        $animesItems->category_id = request('category');

        $animesItems->save();
        return redirect('animes/'.$animesItems->id)->with('succes', 'Anime is opgeslagen!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $animesItems = AnimesItem::find($id);
        $animesItems->destroy();
        return redirect('animes')->with('succes', 'Anime is verwijderd');
    }
}
