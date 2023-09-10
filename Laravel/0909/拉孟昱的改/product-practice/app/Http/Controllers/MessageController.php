<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\ReplyToMessage;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // dd(123);
        $messages = Message::get();
        
        return view('messageBoard', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function replayStore(Request $request)
    {
        $messageId = $request->input('message_id');
        ReplyToMessage::create([
            'replay_message' => $request->reply,
            'message_id' => $messageId,
        ]);
        return redirect(route('messageIndex'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $messageBoard = Message::create([
            'message' => $request->message,
        ]);

        // value是每一筆回覆訊息

        return redirect(route('messageIndex'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        // dd($request->all());
        $message = Message::find($id);
        $message->update([
            'message' => $request->message,
        ]);
        return redirect(route('messageIndex'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // 
        $message = Message::find($id);
        foreach ($message->replyToMessage ?? [] as $value) {
            $value->delete();
        }
        $message->delete();
        return redirect(route('messageIndex'));
    }
}
