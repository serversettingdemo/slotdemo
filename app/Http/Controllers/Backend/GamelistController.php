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
        $data = Gamelist::latest()->get();

        if ($request->ajax()) {
            return datatables()->of($data)
                ->addIndexColumn()
                ->addColumn('image', function ($data) {
                    $body = "<td> <img src=" . asset('storage/' . $data->image) . " class='img-fluid' width='80px'
                    height='auto' alt=''> </td>";

                    return $body;
                })
                ->addColumn('iframe', function ($data) {
                    $view = "<td class='font-w600'> " . Str::limit($data->iframe, 30) . " </td>";

                    return $view;
                })
                ->addColumn('action', function ($data) {
                    $button = "<a href='" . route('gamelist.edit', $data->id) . "' class='edit btn btn-sm btn-alt-success mr-4' data-bs-toggle='tooltip' data-bs-placement='top' title='Edit'>
                    <i class='fa fa-pencil-alt'></i>
                </a>";
                    $button .= "<button href='javascript:void(0)' data-id='" . $data->id . "' class='js-swal-confirm btn btn-sm btn-alt-danger' data-bs-toggle='tooltip' data-bs-placement='top' title='Delete'>
                    <i class='fa fa-times'></i>
                </button>";

                    return $button;
                })
                ->rawColumns(['image', 'iframe', 'action'])
                ->make(true);
        }
        return view('pages.gamelist.index', [
            'title' => 'Gamelist',
            'gamelist' => $data
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

        $simpan = Gamelist::updateOrCreate($validatedData);

        if ($simpan) {
            # code... 
            return response()->json(['status' => 200, 'message' => 'Data berhasil ditambah']);
        } else {
            return response()->json(['status' => 422]);
        }
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
        $gamelist = Gamelist::find($id);
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
        return response()->json(['success' => $gamelist->title . ' Berhasil Dihapus!']);
        // return redirect()->route('gamelist.index')->with('success', 'Game Berhasil Dihapus!' . ' ' . $gamelist->title);
    }

    // public function checkSlug(Request $request)
    // {
    //     $slug = SlugService::createSlug(Gamelist::class, 'slug', $request->title);
    //     return response()->json(['slug' => $slug]);
    // }
}
