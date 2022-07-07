<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscribedMail;
use App\Models\Subscriber;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\Notification;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'topic' => 'required',
            'post' => 'required'
        ]);

        // Check to prevent duplicate post
        $checkPost = Post::where('post', $request->post)->first();
        if(!$checkPost){
            $post = Post::create($request->all());
            $subscribers = Subscriber::get();
            foreach($subscribers as $subscriber){
                $mailData = [
                    "topic" => $request->topic,
                    'body' => "Dear ".$subscriber->firstname.' '.$subscriber->lastname .'! \n'. $request->post
                ];
                // Mail::to($subscriber->email)->send(new SubscribedMail($mailData));
                $delay = Carbon::now()->addSeconds(10);
                Notification::send($subscriber, new SubscriberNotification($mailData))->delay($delay);
            }
        }

        echo "Mail Sent";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
