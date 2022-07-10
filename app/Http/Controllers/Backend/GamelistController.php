<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Gamelist;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GamelistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        return view('pages.gamelist.index', [
            'title' => 'Gamelist',
            'games' => Gamelist::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.gamelist.create', [
            'title' => 'Gamelist Create'
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
        //
        $validatedData = $request->validate([
            'title' => 'required|max:191',
            'iframe' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:210',
        ]);

        $validatedData['slug'] = Str::slug(request('title'));

        if ($request->file()) {
            $fileName = time() . '_' . $request->image->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('gamelist', $fileName, 'public');

            $validatedData['image'] = $filePath;
        }

        $validatedData['body'] = $request->body;
        $validatedData['iframe'] = $request->iframe;

        Gamelist::create($validatedData);

        return redirect()->route('gamelist.index')->with('success', 'Gamelist' . ' ' . $request->title . ' ' . 'Berhasil Dibuat!');
        
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
    public function edit(Gamelist $gamelist)
    {
        //
        return view('pages.gamelist.edit', [
            'title' => 'Gamelist Edit',
            'gamelist' => $gamelist
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gamelist $gamelist)
    {
        //
        $rules = [
            'title' => 'required|max:100',
            'iframe' => 'required',
            'image' => 'mimes:jpeg,png,jpg,gif,svg|max:210'
        ];

        $validatedData = $request->validate($rules);

        // jika type file dengan value 'image', maka
        if ($request->file('image')) {
            // jika gambar lama ada, maka kita akan Delete
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }

            # jika ada gambar maka kita Upload
            $fileName = time() . '_' . $request->image->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('gamelist', $fileName, 'public');

            $validatedData['image'] = $filePath;
        }

        $validatedData['body'] = $request->body;
        $validatedData['iframe'] = $request->iframe;
        Gamelist::where('id', $gamelist->id)->update($validatedData);

       

        return redirect()->route('gamelist.index')->with('success', 'Gamelist ' . ' ' . $request->title . ' ' . 'Berhasil Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $gamelist = Gamelist::FindOrFail($id);

        $filePath = $gamelist->image;
        Storage::disk('public')->delete($filePath);

        $gamelist->delete();
        return redirect()->route('gamelist.index')->with('success', 'Game Berhasil Dihapus!' . ' ' . $gamelist->title);
    }

    // public function checkSlug(Request $request)
    // {
    //     $slug = SlugService::createSlug(Gamelist::class, 'slug', $request->title);
    //     return response()->json(['slug' => $slug]);
    // }
}
