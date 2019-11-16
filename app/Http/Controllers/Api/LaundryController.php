<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Laundry;
use App\Http\Resources\LaundryResource;

class LaundryController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $laundries = Laundry::get();
        // dd($laundries);
        return LaundryResource::collection($laundries);
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $signature = $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'address' => 'address|min:3',
            'longitude' => 'required',
            'latitude' => 'required',
        ]);

        $signature = Laundry::create($signature);

        return new LaundryResource($signature);
    }

    public function show($id)
    {
        $laundry = Laundry::find($id);
        return LaundryResource::collection($laundry);
    }
}
