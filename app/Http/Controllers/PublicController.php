<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacts;
use App\Taproom;
use App\Events;
use App\Jobs;
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

    public function newContact()

    {

        //create a new job using the request data
        $contact = new Contacts;

        $contact->first = request('first');
        $contact->last = request('last');
        $contact->email = request('email');
        $contact->subject= request('subject');
        $contact->message = request('message');


        //Save it to the database
        $contact->save();

        //form validation
        $this->validate(request(),[

            'first' => 'required',

            'last' => 'required',

            'email' => 'required',

            'subject' => 'required',

            'message' => 'required',
        ]);

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
