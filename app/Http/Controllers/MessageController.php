<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\MessagesRoom;
use App\Message;
use App\Client;
use App\User;
use App\Job;

class MessageController extends Controller
{
    // public function message()
    // {
    //     $uid = Auth::id();
    //     $rooms = MessagesRoom::where('id', $uid)->get();
        
    //     $i = 0;
    // for ($i < count($rooms); $i++;) {
    //     $room[] .=
    // }

    // return view('users/messages/message', ['uid'=>$uid,'rooms'=>$rooms[0]]);
    // }

    //ユーザー側のメッセージ関係
    //メッセージ一覧画面
    public function messages(Request $request)
    {
        $uid = Auth::id();
        $messages = MessagesRoom::where('user_id', $uid)->get();
        return view('users/messages', ['messages'=>$messages,'uid'=>$uid]);
    }



    public function user_room(MessagesRoom $rooms)
    {
        $rooms_id = $rooms->id;

        $messages = Message::where('room_id', $rooms_id)->get();
        $uid = $rooms->user_id;
        $user = User::find($uid);
        $client_id = $rooms->client_id;
        $client = Client::find($client_id);
        return view('users/messages/message_room', ['messages'=>$messages,'user'=>$user,'client'=>$client,'room_id'=>$rooms_id]);
    }

    public function message_post(Request $request)
    {
        $message_input = $request->message;
        $user_id = $request->user_id;
        $client_id = $request->client_id;
        $room_id = $request->room_id;
        $message = new Message;
        $message->room_id = $room_id;
        $message->message = $message_input;
        $message->message_from = $user_id;
        $message->message_which = 1;
        $message->save();
        $messages = Message::where('room_id', $room_id)->get();
        $client = Client::find($client_id);
        $user = User::find($user_id);
        return view('users/messages/message_room', ['messages'=>$messages,'user'=>$user,'client'=>$client,'room_id'=>$room_id]);
    }


    //クライアント側のメッセージ関係
    //メッセージ一覧画面
    public function messages_view(Request $request)
    {
        $client_id = $request->session()->get('id');
        $rooms = MessagesRoom::where('client_id', $client_id)->get();
        return view('clients/messages/message', ['rooms'=>$rooms]);
    }
    //ユーザーとのチャット画面
    public function message_room(Request $request)
    {
        $room_id = $request->room_id;
        $room = MessagesRoom::find($room_id);
        $uid = $room->user_id;
        $client_id = $room->client_id;
        $job_id = $room->job_id;
        $user = User::find($uid);
        $client = Client::find($client_id);
        $job = Job::find($job_id);
        $messages = Message::where('room_id', $room_id)->get();
        return view('clients/messages/message_room', ['messages'=>$messages,'user'=>$user,'client'=>$client,'job'=>$job, 'room_id'=>$room_id]);
    }
    // チャット送信して改めて表示
    public function message_post_client(Request $request)
    {
        $message_input = $request->message;
        $user_id = $request->user_id;
        $client_id = $request->client_id;
        $room_id = $request->room_id;
        $message = new Message;
        $message->room_id = $room_id;
        $message->message = $message_input;
        // クライアントは２
        $message->message_from = $client_id;
        $message->message_which = 2;
        $message->save();
        $messages = Message::where('room_id', $room_id)->orderBy('id', 'desc')->get();
        $user = User::find($user_id);
        $client = Client::find($client_id);
        return view('clients/messages/message_room', ['messages'=>$messages,'user'=>$user,'client'=>$client, 'room_id'=>$room_id]);
    }
}
