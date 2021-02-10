<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Apartment;
use App\Models\Image;
use App\Models\Message;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public static function categorylist(){
        return Category::where('parent_id', '=',0)->with('children')->get();
    }

    public static function getSetting(){
        return Setting::first();
    }

    public function index()
    {
        $setting = Setting::first();
        $last = Apartment::select('id', 'title', 'image')->limit(6)->inRandomOrder()-> get();
        $data = [
            'setting' => $setting,
            'page' => 'home',
            'last' => $last
        ];

        return view('home.index',$data);
    }
    public function apartment($id){
        $data = Apartment::find($id);
        $datalist = Image::where('apartment_id', $id)->get();
        return view('home.product_detail', ['data'=>$data, 'datalist'=>$datalist]);
    }
    public function categoryapartments($id){
        $datalist = Apartment::where('category_id',$id)->get();
        $data = Category::find($id);
        return view('home.category_products',['data'=>$data, 'datalist'=>$datalist]);
    }
    public function aboutus()
    {
        $setting = Setting::first();
        return view('home.about', ['setting'=> $setting]);
    }
    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact', ['setting'=> $setting]);
    }
    public function references()
    {
        $setting = Setting::first();
        return view('home.references', ['setting'=> $setting]);
    }
    public function sendmessage(Request $request)
    {
        $data = new Message();
        $data->firstname = $request -> input('firstname');
        $data->lastname = $request -> input('lastname');
        $data->email = $request -> input('email');
        $data->subject = $request -> input('subject');
        $data->message = $request->input('message');
        $data-> save();

        return redirect()->route('contact')->with('info', 'Your message sent, Thank you.');

    }

    public function login()
    {
        return view('admin.login');
    }

    public function logincheck(Request $request){
        if ($request->isMethod('post'))
        {
            $credentials = $request->only('email','password');
            if (Auth::attempt($credentials))
            {
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }

            return back()->withErrors([
                'email'=>'The provided credentials do not your email records',
            ]);
        }
        else
        {
            return view('admin.login');
        }
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


    public function test($id,$name){
        $data['id']=$id;
        $data['name']=$name;
        return view('home.test',$data);
    }
}
