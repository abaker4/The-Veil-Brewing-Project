<?php

namespace App\Http\Controllers;



use App\Mail\WelcomeAgain;
use Illuminate\Http\Request;
use App\Contact;
use App\Taproom;
use App\Events;
use App\Jobs;
use Illuminate\Support\Facades\Mail;
use App\ContactNewsletter;
use Illuminate\Support\Facades\DB;


class PublicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function ageFilter()
    {
        return view('public.agefilter');

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        return view('public.welcome');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store()
    {
        return view('public.store');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contact()
    {
        return view('public.contact');
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function newContact(Request $request)
    {
        //Form Validation
        $this->validate(request(),[

            'first' => 'required',
            'last' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'

            ]);

        $data = $request->all();

        //firstOrCreate method will attempt to locate a database record using the given column / value pairs.
        // If the model can not be found in the database, a record will be inserted with the given attributes.
        $contact = Contact::firstOrCreate(['email' => $data['email']]);

        //form handling using the $request class
        $contact->first = $data['first'];
        $contact->last = $data['last'];
        $contact->subject = $data['subject'];
        $contact->message = $data['message'];

        //instantiate a new ContactNewsletter object
        $contactNewsletter = new ContactNewsletter();

        //Query getting contact_id and newsletter_id
        $contact_exists = DB::table('contact_newsletters')->where([
            ['contact_id', '=', $contact->id],
            ['newsletter_id', '=',  $data['newsletter_id'] ]
        ])->get();

        //conditional statement testing whether or not to handle form input
        if($contact_exists->isEmpty()){

            $contactNewsletter->contact_id = $contact->id;
            $contactNewsletter->newsletter_id = $data['newsletter_id'];
            $contactNewsletter->save();


            session()->flash('message', "Thank you for your inquiry, we'll get back to you as soon as possible!");

            //Send Auto-Response Email
            Mail::to($contact)->send(new WelcomeAgain($contact));

        } else {

            session()->flash('message', 'You are already signed up');
        }

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
        //firstOrCreate method will attempt to locate a database record using the given column / value pairs.
        // If the model can not be found in the database, a record will be inserted with the given attributes.
         $contact = Contact::firstOrCreate(['email' => $data['email']]);

         //instantiate a new ContactNewsletter object
        $contactNewsletter = new ContactNewsletter();

        //Query getting contact_id and newsletter_id
        $contact_exists = DB::table('contact_newsletters')->where([
            ['contact_id', '=', $contact->id],
            ['newsletter_id', '=',  $data['newsletter_id'] ]
        ])->get();

        //conditional statement testing whether or not to handle form input
        if($contact_exists->isEmpty()){

            $contactNewsletter->contact_id = $contact->id;
            $contactNewsletter->newsletter_id = $data['newsletter_id'];
            $contactNewsletter->save();

            session()->flash('message', "So you love beer? We do too! Glad you finally decided to join the club!");

            //Send Auto-Response Email
            Mail::to($contact)->send(new WelcomeAgain());

        } else {

            session()->flash('message', 'You are already signed up');
        }

        return redirect ('/taproom');
    }




    public function eventSignUp(Request $request)
    {
        $data = $request->all();

        //firstOrCreate method will attempt to locate a database record using the given column / value pairs.
        // If the model can not be found in the database, a record will be inserted with the given attributes.
        $contact = Contact::firstOrCreate(['email' => $data['email']]);

        //instantiate a new ContactNewsletter object
        $contactNewsletter = new ContactNewsletter();

        //Query getting contact_id and newsletter_id
        $contact_exists = DB::table('contact_newsletters')->where([
            ['contact_id', '=', $contact->id],
            ['newsletter_id', '=',  $data['newsletter_id'] ]
        ])->get();

        //conditional statement testing whether or not to handle form input
        if($contact_exists->isEmpty()) {

            $contactNewsletter->contact_id = $contact->id;
            $contactNewsletter->newsletter_id = $data['newsletter_id'];
            $contactNewsletter->save();

            session()->flash('message', "Welcome to the Veil, where the party don't stop until 8 in the morning!");

            //Send Auto-Response Email
            Mail::to($contact)->send(new WelcomeAgain());

        } else {

            session()->flash('message','You are already signed up!');
        }

        return redirect ('/events');

    }


}
