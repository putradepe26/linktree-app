<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Link;
use Illuminate\Http\Request;

class LinkTwoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $links = Link::orderBy('order')->get();
        return view('links.index', compact('links'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('links.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $link = new Link();
        $link -> title = $request -> title;
        $link -> url = $request -> url;
        $link -> order = Link::max('order') + 1;
        $link -> save();
        return redirect() -> route('links.index');
    }

    /**
     * Display the specified resource.
     */
    //public function show(string $id)
    //{
        //
    //}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Link $link)
    {
        return view('links.edit', compact('link'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Link $link)
    {
        $link -> title = $request -> title;
        $link -> url = $request -> url;
        $link -> save();
        return redirect() -> route('links.index');
    }

    public function destroy()
    {
        $link->delete();
        return redirect()->route('links.index');
    }

    public function reorder(Request $request)
    {
        $order = $request -> order;
        foreach ($order as $index => $id)
        {
            $link = Link::find($id);
            $link -> order = $index;
            $link->save();
        }
        return response()->json(['status' => 'success']);
    }
}
