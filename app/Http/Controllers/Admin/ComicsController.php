<?php

namespace App\Http\Controllers\Admin;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;



class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $req = $request->all();
        $newComic = new Comic();
        $newComic->sale_date = date("Y-m-d");
        if ($request->has('thumb')) {
            $path = Storage::put('comics_thumbs', $request->thumb);
            $newComic->thumb = $path;
        }
        $newComic->fill($req);
        $newComic->save();

        return to_route('comics.index')->with('message', 'Welldone! Comic created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();
        if ($request->has('thumb') && $comic->thumb) {
            Storage::delete($comic->thumb);
            $newThumb = $request->thumb;
            $path = Storage::put('comics_thumbs', $newThumb);
            $data['thumb'] = $path;
        }
        $comic->update($data);
        return to_route('comics.index', $comic)->with('message', 'Welldone! Comic Edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        if (!is_null($comic->thumb)) {
            Storage::delete($comic->thumb);
        }
        $comic->delete();
        return to_route('comics.index')->with('message', 'Welldone! Comic Deleted Successfully');
    }
}
