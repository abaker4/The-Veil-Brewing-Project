<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Contact;
use App\Taproom;
use App\Events;
use App\Jobs;
use Illuminate\Support\Facades\Mail;
use App\Mail\Welcome;
use App\Mail\WelcomeAgain;
use App\ContactNewsletter;
use Illuminate\Support\Facades\DB;


class PublicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function agefilter()
    {
        return view('public.agefilter');

    }

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
            'message' => 'required'

            ]);

        $data = $request->all();

        $contact = Contact::firstOrCreate(['email' => $data['email']]);
        $contact->first = $data['first'];
        $contact->last = $data['last'];
        $contact->subject = $data['subject'];
        $contact->message = $data['message'];


        $contactNewsletter = new ContactNewsletter();

        $contact_exists = DB::table('contact_newsletters')->where([
            ['contact_id', '=', $contact->id],
            ['newsletter_id', '=',  $data['newsletter_id'] ]
        ])->get();

        if($contact_exists->isEmpty()){

            $contactNewsletter->contact_id = $contact->id;

            $contactNewsletter->newsletter_id = $data['newsletter_id'];

            $contactNewsletter->save();

            //Success Message

            session()->flash('message', "Thank you for your inquiry, we'll get back to you as soon as possible!");

            //Send Auto-Response Email
            Mail::to($contact)->send(new WelcomeAgain($contact));

        } else{

            session()->flash('message', 'You are already signed up');
        }


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

    public function tapSignUp(Request $request)
    {

         $data = $request->all();
         $contact = Contact::firstOrCreate(['email' => $data['email']]);


        $contactNewsletter = new ContactNewsletter();

        $contact_exists = DB::table('contact_newsletters')->where([
            ['contact_id', '=', $contact->id],
            ['newsletter_id', '=',  $data['newsletter_id'] ]
        ])->get();

        if($contact_exists->isEmpty()){
            $contactNewsletter->contact_id = $contact->id;

            $contactNewsletter->newsletter_id = $data['newsletter_id'];

            $contactNewsletter->save();

            session()->flash('message', "So you love beer? We do too! Glad you finally decided to join the club!");

            Mail::to($contact)->send(new WelcomeAgain($contact));

        }else{

            session()->flash('message', 'You are already signed up');
        }

        return redirect ('/taproom');
    }




    public function eventSignUp(Request $request)
    {
        $data = $request->all();
        $contact = Contact::firstOrCreate(['email' => $data['email']]);


        $contactNewsletter = new ContactNewsletter();

        $contact_exists = DB::table('contact_newsletters')->where([
            ['contact_id', '=', $contact->id],
            ['newsletter_id', '=',  $data['newsletter_id'] ]
        ])->get();

        if($contact_exists->isEmpty()) {

            $contactNewsletter->contact_id = $contact->id;

            $contactNewsletter->newsletter_id = $data['newsletter_id'];

            $contactNewsletter->save();

            session()->flash('message', "Welcome to the Veil, where the party don't stop until 8 in the morning!");

            Mail::to($contact)->send(new WelcomeAgain($contact));

        }else {

            session()->flash('message','You are already signed up!');
        }



        return redirect ('/events');

    }


}
