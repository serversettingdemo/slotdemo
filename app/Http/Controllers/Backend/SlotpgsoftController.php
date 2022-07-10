<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Slotpgsoft;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SlotpgsoftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.slotpgsoft.index', [
            'title' => 'Slot Pg-soft Index',
            'games' => Slotpgsoft::latest()->get()
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
        //
        return view('pages.slotpgsoft.create', [
            'title' => 'SLot Pg Soft Create'
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
            $filePath = $request->file('image')->storeAs('slotpgsoft', $fileName, 'public');

            $validatedData['image'] = $filePath;
        }

        $validatedData['body'] = $request->body;
        $validatedData['iframe'] = $request->iframe;

        Slotpgsoft::create($validatedData);

        return redirect()->route('pgsoft.index')->with('success', 'Slot pgsoft' . ' ' . $request->title . ' ' . 'Berhasil Dibuat!');
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
    public function edit(Slotpgsoft $pgsoft)
    {
        //
        return view('pages.slotpgsoft.edit', [
            'title' => 'Pgsoft Edit',
            'pgsoft' => $pgsoft
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slotpgsoft $pgsoft)
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
            $filePath = $request->file('image')->storeAs('slotpgsoft', $fileName, 'public');
            $validatedData['image'] = $filePath;
        }
        

        $validatedData['body'] = $request->body;
        $validatedData['iframe'] = $request->iframe;
        Slotpgsoft::where('id', $pgsoft->id)->update($validatedData);

        return redirect()->route('pgsoft.index')->with('success', 'Slot pg soft ' . ' ' . $request->title . ' ' . 'Berhasil Di Update!');
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
        $pgsoft = Slotpgsoft::FindOrFail($id);

        $filePath = $pgsoft->image;
        Storage::disk('public')->delete($filePath);

        $pgsoft->delete();
        return redirect()->route('pgsoft.index')->with('success', 'Game Berhasil Dihapus!' . ' ' . $pgsoft->title);
    }
}
