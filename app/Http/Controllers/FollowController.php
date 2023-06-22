<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Profile;
use App\Models\Follow;
use Cloudinary;

class FollowController extends Controller
{
    public function follow(User $user) {
        $follows = FollowUser::create([
            'follower_id' => \Auth::user()->id,
            'followee_id' => $user->id,
        ]);
        $followCount = count(FollowUser::where('follower_id', $user->id)->get());
        return response()->json(['followCount' => $followCount]);
    }

    public function unfollow(User $user) {
        $follows = FollowUser::where('followee_id', \Auth::user()->id)->where('follower_id', $user->id)->first();
        $follows->delete();
        $followCount = count(FollowUser::where('followee_id', $user->id)->get());
        return response()->json(['followCount' => $followCount]);
    }
    
    public function store(Request $request, Follow $follows)
    {
        $input = [];
        $input = $request['follows'];
        $icon_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        $input += ['icon_url' => $icon_url];
        $follows->fill($input)->save();
        return redirect('/follows/' . $follows->id);
    }
    
    public function index(User $user,Follow $follows,Profile $profile)
    {
        return view('/follows/index')->with(['user' => $user,'follows' => $follows,'profile'=>$profile]);
    }
    
    public function show(Follow $follows,Profile $profile)
    {
        return view('/follows/show')->with(['follows' => $follows,'profile'=>$profile]);
    }
}