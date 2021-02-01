<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::first();
        if($setting === null)
        {
            $setting = new Setting();
            $setting->title = 'project title';
            $setting->save();
            $setting= Setting::first();
        }
        return view('admin.setting_edit', ['setting' => $setting]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        $id=$request->input('id');

        $setting = Setting::find($id);
        $setting->title = $request -> input('title');
        $setting->keywords = $request->input('keywords');
        $setting->description = $request->input('description');
        $setting->company = $request->input('campany');
        $setting->address = $request->input('address');
        $setting->phone = $request->input('phone');
        $setting->fax = $request->input('fax');
        $setting->email = $request->input('email');
        $setting->smtpserver = $request->input('smtpserver');
        $setting->smtpemail = $request->input('smtpemail');
        $setting->smtppassword = $request->input('smtppassword');
        $setting->smtpport = $request->input('smtpport');
        $setting->facebook = $request->input('facebook');
        $setting->instagram = $request->input('instagram');
        $setting->twitter = $request->input('twitter');
        $setting->aboutus = $request->input('aboutus');
        $setting->contact = $request->input('contact');
        $setting->references = $request->input('references');
        $setting->status = $request->input('status');
        $setting->save();
        return redirect()->route('admin_setting');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
