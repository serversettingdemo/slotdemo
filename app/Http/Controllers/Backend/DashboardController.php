<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Homedesc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class DashboardController extends Controller
{
    //
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('dashboard', [
            'routeCollection' => Route::getRoutes()
        ]);
    }

    public function homedesc()
    {
        return view('pages.homedesc.index', [
            'homedesc' => Homedesc::first()
        ]);
    }

    public function homedesc_create()
    {
        return view('pages.homedesc.create', [
            'homedesc' => Homedesc::all()
        ]);
    }

    public function homedesc_store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required'
        ]);

        Homedesc::create($validatedData);

        return redirect()->route('homedesc')->with('success','Homdesc create successfully');
    }

    public function homedesc_update(Request $request, Homedesc $homedesc)
    {
        $rules = [
            'title' => 'required'
        ];

        $validatedData = $request->validate($rules);

        Homedesc::first()->update($validatedData);

        return redirect()->route('homedesc')->with('success','homedesc updated successfully');
    }
}
