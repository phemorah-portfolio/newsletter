<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscribedMail;
use App\Models\Post;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Notification;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Subscriber::all();
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
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email'
        ]);
        // Check to prevent a duplicate entry
        $user = Subscriber::where('email',$request['email'])->first();

        if($user){
            Session::flash('error', 'You have subscribed here previously');
            return redirect()->back();
        }
        if(Subscriber::create($request->all())){
            $mailData = [
                "topic" => "Welcome",
                'post' => "You have been subscribed successfully to our newsletter"
            ];

            if(Post::create($request->all())){
                // Mail::to($request['email'])->send(new SubscribedMail($mailData));
                Notification::send($user, new SubscriberNotification($mailData));
            }

            Session::flash('success', 'You have been subscribed successfully');
            return redirect()->back();
        }
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
