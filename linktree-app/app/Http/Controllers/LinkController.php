<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function index()
    {
        $links = Link::orderBy('order')->get();
        return view('links.index', compact('links'));
    }

    public function create()
    {
        return view('links.create');
    }

    public function store(Request $request)
    {
        $link = new Link();
        $link -> title = $request -> title;
        $link -> url = $request -> url;
        $link -> order = Link::max('order') + 1;
        $link -> save();
        return redirect() -> route('links.index');
    }

    public function edit(Link $link)
    {
        return view('links.edit', compact('link'));
    }

    public function update(Request $request, Link $link)
    {
        $link -> title = $request -> title;
        $link -> url = $request -> url;
        $link -> save();
        return redirect() -> route('links.index');
    }

    public function destroy(Link $link)
    {
        $link->delete();
        return redirect()->route('links.index');
    }

    public function reorder(Request $request) //Tempat mengurutkan nomor order kembali semula
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

    public function preview($id = null) 
    { 
        if ($id) 
        { 
            $links = Link::where('id', $id)->get(); 
        } 
        else 
        { 
            $links = Link::orderBy('order')->get(); 
        } 
        return view('links.preview', compact('links')); }

}
