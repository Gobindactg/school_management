<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Social;
use Auth;

class PartialController extends Controller
{
    public function add_social(){
        $id = Auth::id();
        $social = social::orderBy('id', 'asc')->where('user_id', $id)->get();
        return view('Frontend.partial.social')->with('social', $social);
    }
    public function add_social_icon(Request $request){
        $user_id = Auth::id();
        $social = new social;
        $social->name = $request->social_media;
        $social->media_link= $request->social_media_link;
        $social->user_id = $user_id;
        $social->save();
        session()->flash('success', 'Your Social Media Link Added Succesfully !!');
        return redirect()->route('social_media');
    }
    
    public function social_manage(){
        $id = Auth::id();
        $social = social::orderBy('id', 'asc')->where('user_id', $id)->get();
        return view('Frontend.partial.socialManage')->with('social', $social);
    }
}
