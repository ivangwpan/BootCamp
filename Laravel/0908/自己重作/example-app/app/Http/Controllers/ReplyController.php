<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RelyMessage;

class ReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $replymessages = RelyMessage::get();
        // return view('discussion.discussion',compact('replymessages'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        RelyMessage::create([
            'reply_message' => $request->reply,
            // 'discussion_head_id'=>

        ]);
        return redirect(route('discussion.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
