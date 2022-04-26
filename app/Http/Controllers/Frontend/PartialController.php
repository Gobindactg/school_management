<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Social;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use File;
use Image;


class PartialController extends Controller
{
    public function add_social(){
        $id = Auth::id();
        $social = social::orderBy('id', 'asc')->where('user_id', $id)->get();
        return view('Frontend.partial.social')->with('social', $social);
    }
    public function add_social_icon(Request $request){
        $request->validate([
            'social_media'=>'required',
            'social_media_link'=>'required',
        ]);
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

    public function message(Request $request){
        $user_id = Auth::id();
        $message = new Message;
        $message->title = $request->title;
        $message->description = $request->description;
        if ($request->hasFile('message_image')) {
            //   //insert that image
            $image = $request->file('message_image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('Frontend/MessageImage/' . $img);
            Image::make($image)->save($location);
            $message->image = $img;
           
        }
        $message->user_id = $user_id;
        $message->save();
        return redirect()->route('noipunno');
    }

    public function read_message($id){
        $status = Message::find($id);
        $status->status = 2;
        $status->save();
        $id = Auth::id();
        $social = Message::orderBy('id', 'asc')->where('user_id', $id)->get();
        // session()->flash('success', 'Order completed status Changed..........');
         return view('Frontend.partial.show_message')->with('social', $social);
    }

    public function show_message(){
        $id = Auth::id();
        $social = Message::orderBy('id', 'asc')->where('user_id', $id)->get();
        return view('Frontend.partial.show_message')->with('social', $social);
    }
}
