<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use Cloudinary;

class ProfileController extends Controller
{
    public function index(User $user)
    {
       return view('/profiles/user')->with(['user' => $user]);
       return view('/profiles/user')->with(['profile' => $profile]);
    }
    public function create()
    {
       return view('/profiles/create');
    }
    public function store(Request $request, Profiles $profile)
    {
        $input = $request['create'];
        if($request->file('image')){
         $icon_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
         $head_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
         $input += ['icon_url' => $icon_url,'head_url' => $head_url];
        }
        $profile->fill($input)->save();
        return redirect('/profiles/' . $profile->id);
    }
    public function show(Profile $profile)
    {
        return view('/profiles/show')->with(['profile' => $profile]);
    }

}