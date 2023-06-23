<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use Cloudinary;

class ProfileController extends Controller
{
    public function create()
    {
       return view('/profiles/create');
    }
    public function edit(Profile $profile)
    {
        return view('/profile/edit')->with(['profile' => $profile]);
    }
    public function update(ProfileRequest $request, Profile $profile)
    {
        $input_profile = $request['profile'];
        $profile->fill($input_profile)->save();
        return redirect('/profiles/' . $profile->id);
    }
    public function store(Request $request, Profile $profile)
    {
        $input = $request['profile'];
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