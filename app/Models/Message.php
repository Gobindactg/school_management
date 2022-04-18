<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;

class Message extends Model
{
    use HasFactory;
    public static function show_message()
    {
            $message = Message::where('user_id', Auth::id())->where('status', 1)->get();
   
            return $message;
    }
    public static function unread_message()
    {
        $message = Message::where('user_id', Auth::id())->where('status', 1)->get();
     
        $unread_message = 0;
        foreach ($message as $message) {
            $unread_message += $message->status;
        }
        return $unread_message;
    }
}
