<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($apartment_id)
    {
        $data = Apartment::find($apartment_id);
        $images = DB::table('images')->where('apartment_id','=', $apartment_id)->get();

        return view('home.user_apartment_image_add', [ 'data' => $data , 'images' => $images ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * @param  \App\Models\Image  $image
     */
    public function store(Request $request, $apartment_id)
    {
        $data = new Image;
        $data->title = $request->input('title');
        $data->apartment_id = $apartment_id;
        $data->image = Storage::putFile('images', $request->file('image'));
        $data->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @param \App\Models\Apartment $apartment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image, $id, $apartment_id)
    {
        $data = Image::find($id);
        $data->delete();

        return redirect()->back();
    }
}
