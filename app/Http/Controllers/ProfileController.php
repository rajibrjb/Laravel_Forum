<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Socialite;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile.index')->with('profile', Auth::user());
    }
    public function update()
    {
//        $this->validate(request(), [
//            'site_name' => 'required',
//            'contact_number' => 'required',
//            'contact_email' => 'required',
//            'address' => 'required'
//        ]);
        $profile = Auth::user();
        $profile->name = request()->name;
        $profile->email = request()->email;
        $profile->password = request()->password;
        $profile->contact_number = request()->contact_number;
        $profile->save();
        Session::flash('success','Settings updated.');
        return redirect()->back();
    }

}
