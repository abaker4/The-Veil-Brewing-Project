<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Contact;
use App\Taproom;
use App\Events;
use App\Jobs;
use App\Mail\Welcome;
use App\Mail\WelcomeAgain;


class PublicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {


        return view('public.welcome');
    }

    public function store()
    {


        return view('public.store');
    }

    public function contact()
    {


        return view('public.contact');
    }

    public function newContact(Request $request)

    {



        $this->validate(request(),[

            'first' => 'required',

            'last' => 'required',

            'email' => 'required',

            'subject' => 'required',

            'message' => 'required',

            ]);


            $data = $request->all();
        //create a new job using the request data
        $contacts = new Contact();

        $contacts->first = $data['first'];
        $contacts->last = $data['last'];
        $contacts->email = $data['email'];
        $contacts->subject = $data['subject'];
        $contacts->message = $data['message'];

        $contacts->save();


        //Send Auto-Response Email

        \Mail::to($contacts)->send(new WelcomeAgain($contacts));

        //Success Message

        session()->flash('message', "Thank you for your inquiry, we'll get back to you as soon as possible!");



        // return to the home page
        return redirect ('/contact');

    }

    public function events()
    {
        $events = Events::all();

        return view('public.events', compact('events'));
    }

    public function jobs()

    {
        $jobs = Jobs::all();
        return view('public.jobs', compact('jobs'));
    }


    public function taproom(Taproom $taproom)
    {

        $taproom = $taproom->all();

        return view('public.taproom', compact('taproom'));

    }


}
