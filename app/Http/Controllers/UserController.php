<?php

namespace MoviKyte\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;


class UserController extends Controller
{
    public function profile() {
    	return view('editprofile', array('user' => Auth::user()) );
    }

    public function updatePic(Request $request) {

    	if ($request->hasFile('image')) {
    		$profilePic = $request->file('image');
    		//assigns a random number plus the original file extension
    		$filename = time() . '.' . $profilePic->getClientOriginalExtension();
    		//the line below uses image intervention. link pinned on slack
    		//this changes the image size and names it after the random $filename number assigned above
    		Image::make($profilePic)->resize(100, 100)->save( public_path('/uploads/profile/' . $filename));

    		$user = Auth::user();
    		$user->image = $filename;
    		$user->save();
    	}

    	return view('editprofile', array('user' => Auth::user()));

    }

}