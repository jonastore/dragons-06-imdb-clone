<?php

namespace MoviKyte\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Image;


class UserController extends Controller
{
    public function profile() {
    	return view('editprofile', array('user' => Auth::user()) );
    }

    public function updateUser(Request $request) {

    	if ($request->hasFile('image')) {

    		$profilePic = $request->file('image');
    		//assigns a random number plus the original file extension
    		$filename = Auth::user()->email . '.' . $profilePic->getClientOriginalExtension();
    		//the line below uses image intervention. link pinned on slack
    		//this changes the image size and saves it with the filename
    		Image::make($profilePic)->resize(100, 100)->save( public_path('/uploads/profile/' . $filename));

    		$user = Auth::user();
    		$user->image = $filename;
    		$user->save();
    	} else if ($request){

            $user = Auth::user();
            $user->bio = $request->bio;
            $user->name = $request->name;
            $user->save();

        }

    	return view('editprofile', array('user' => Auth::user()));

	}

	public function userWatchlist(){
		$watchlist = DB::table('watch')->get();

		return view('watchlist', compact('watchlist'));
	}

}
