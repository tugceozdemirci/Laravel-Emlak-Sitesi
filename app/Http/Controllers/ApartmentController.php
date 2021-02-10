<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Apartment::where('user_id', Auth::id())->get();
        return view('home.user_apartment', ['datalist' => $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datalist = Category::with('children')->get();
        return view('home.apartment_add', ['datalist' => $datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Apartment();
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->category_id = $request->input('category_id');
        $data->user_id = Auth::id();
        $data->area = $request->input('area');
        $data->location = $request->input('location');
        $data->price = $request->input('price');
        $data->bathroom = $request->input('bathroom');
        $data->balcony = $request->input('balcony');
        $data->garden = $request->input('garden');
        $data->garage = $request->input('garage');
        $data->floor = $request->input('floor');
        $data->room = $request->input('room');
        $data->heating = $request->input('heating');
        $data->detail = $request->input('detail');
        $data->image = Storage::putFile('image', $request->file('image'));
        $data->save();
        return redirect()->route('user_apartments')->with('success', 'Apartment added successfuly!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function show(Apartment $apartment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function edit(Apartment $apartment, $id)
    {
        $data = Apartment::find($id);
        $datalist = Category::with('children')->get();

        return view('home.apartment_edit', ['data' => $data, 'datalist' => $datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apartment $apartment , $id)
    {
        $data = Apartment::find($id);
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->category_id = $request->input('category_id');
        $data->user_id = Auth::id();
        $data->area = $request->input('area');
        $data->location = $request->input('location');
        $data->price = $request->input('price');
        $data->bathroom = $request->input('bathroom');
        $data->balcony = $request->input('balcony');
        $data->garden = $request->input('garden');
        $data->garage = $request->input('garage');
        $data->floor = $request->input('floor');
        $data->room = $request->input('room');
        $data->heating = $request->input('heating');
        $data->detail = $request->input('detail');
        if($request->file('image')!=null)
        {
            $data->image = Storage::putFile('images', $request->file('image'));
        }
        $data->save();
        return redirect()->route('user_apartments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apartment $apartment, $id)
    {
        DB::table('apartments')->where('id', '=', $id)->delete();
        return redirect()->route('user_apartments');
    }
}


