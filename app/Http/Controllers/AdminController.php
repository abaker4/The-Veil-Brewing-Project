<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail;
use App\Taproom;
use App\User;
use App\Events;
use App\Jobs;
use App\Contact;
use League\Flysystem\Exception;
use App\ContactNewsletter;
use Illuminate\Support\Facades\DB;
use App\Mail\tapnewsletter;
use App\Mail\eventsnewsletter;
use App\Mail\generalnewsletter;
use Carbon\Carbon;



class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $taps = Taproom::all();
        $events = Events::all();
        $jobs = Jobs::all();
        $contacts = Contact::all();

        return view('admin.index', compact('taps', 'events', 'jobs', 'contacts'));


    }

    public function generalnewsletter()
    {

        $general_newsletter_contacts =
            DB::table('contact_newsletters')
                ->join('contacts', 'contact_newsletters.contact_id', '=', 'contacts.id')
                ->join('newsletters', 'contact_newsletters.newsletter_id', '=', 'newsletters.id')
                ->select('contact_newsletters.id', 'newsletters.id', 'contacts.email')
                ->where('newsletters.id', '=', 3)
                ->get();


        // loop through all contacts on newsletter and send
        foreach ($general_newsletter_contacts as $contact) {

            \Mail::to($contact->email)->send(new generalnewsletter());

        }

        return 'Your mail blast is underway';
    }




// Taps //

    public function showTap()
    {

        return view('admin.taproom.detail');
    }


    public function createTap()
    {


        return view('admin.taproom.create');


    }


    public function editTap($id)
    {

        $tap = Taproom::find($id);


        return view('admin.taproom.edit', compact('tap'));


    }


    /**
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function storeTap(Request $request)
    {

        $this->validate($request, [

            'title' => 'required',

            'type' => 'required',

            'ABV' => 'required',

            'small' => 'required',

            'large' => 'required',

        ]);

        $data = $request->all();

        $tap = Taproom::find($data['id']);

        $tap->title = $data['title'];
        $tap->type = $data['type'];
        $tap->ABV = $data['ABV'];
        $tap->small = $data['small'];
        $tap->large = $data['large'];

        $tap->save();

        session()->flash('message', 'Your new brew has now been added');

        return redirect('/admin/home');

    }

    public function newTap(Request $request)
    {

        //form validation

        $this->validate(request(), [

            'title' => 'required',

            'type' => 'required',

            'ABV' => 'required',

            'small' => 'required',

            'large' => 'required',
        ]);



        $data = $request->all();

        //create a new tap using the request data
        $tap = new Taproom();

        $tap->title = $data['title'];
        $tap->type = $data['type'];
        $tap->ABV = $data['ABV'];
        $tap->small = $data['small'];
        $tap->large = $data['large'];

        //Save it to the database
        $tap->save();


        session()->flash('message', 'Your new brew has now been added');

        // return to the home page
        return redirect('admin/home');

    }


    public function destroyTap($id)
    {


        $tap = Taproom::find($id);
        $tap->delete();


        return "success";
    }

    public function tapnewsletter()
    {

        $taproom_newsletter_contacts =
            DB::table('contact_newsletters')
                ->join('contacts', 'contact_newsletters.contact_id', '=', 'contacts.id')
                ->join('newsletters', 'contact_newsletters.newsletter_id', '=', 'newsletters.id')
                ->select('contact_newsletters.id', 'newsletters.id', 'contacts.email')
                ->where('newsletters.id', '=', 1)
                ->get();



        // loop through all contacts on newsletter and send
        foreach ($taproom_newsletter_contacts as $contact) {
            \Mail::to($contact->email)->send(new tapnewsletter());
        }

        return 'Your mail blast is underway';


    }


    // JOBS //


    public function createJob()
    {

        return view('admin.jobs.create');
    }


    public function showJob()
    {

        return view('admin.jobs.detail');
    }


    public function editJob($id)
    {

        $jobs = Jobs::find($id);


        return view('admin.jobs.edit', compact('jobs'));

    }


    public function storeJob(Request $request)
    {

        $this->validate(request(), [

            'title' => 'required',

            'summary' => 'required',

            'q_description' => 'required',

            'responsibilities' => 'required'

        ]);


        $data = $request->all();

        $job = Jobs::find($data['id']);

        $job->title = $data['title'];
        $job->summary = $data['summary'];
        $job->q_description = $data['q_description'];
        $job->responsibilities = $data['responsibilities'];

        $job->save();

        session()->flash('message', 'Your new brew has now been added');


        return redirect('/admin/home');

    }

    public function newJob()

    {

        //form validation

        $this->validate(request(), [

            'title' => 'required',

            'summary' => 'required',

            'q_description' => 'required',

            'responsibilities' => 'required',
        ]);

        //create a new job using the request data
        $job = new Jobs;

        $job->title = request('title');
        $job->summary = request('summary');
        $job->q_description = request('q_description');
        $job->responsibilities = request('responsibilities');


        //Save it to the database
        $job->save();

        session()->flash('message', 'Thanks for Posting That Job! Team Work Makes the Dream Work!');

        // return to the home page
        return redirect('/admin/home');

    }


    public function destroyJob($id)
    {


        $job = Jobs::find($id);
        $job->delete();

        return "success";
    }



    // Events //


    public function createEvent()
    {

        $events = Events::all();


        return view('admin.events.create', compact('events'));
    }


    public function showEvent()
    {

        return view('admin.events.detail');
    }


    public function editEvent($id)
    {

        $events = Events::find($id);

        return view('admin.events.edit', compact('events'));

    }


    public function storeEvent(Request $request)
    {

        $this->validate(request(), [

            'title' => 'required',

            'body' => 'required',

            'start' => 'required',

            'end' => 'required'
        ]);

        $data = $request->all();


        $event = Events::find($data['id']);

        $event->title = $data['title'];
        $event->body = $data['body'];
        $event->start = $data['start'];
        $event->end = $data['end'];


        $event->save();

        session()->flash('message', 'Your new event has now been added');


        return redirect('/admin/home');

    }

    public function newEvent()

    {
        //form validation

        $this->validate(request(), [

            'title' => 'required',

            'body' => 'required',

            'start' => 'required',

            'end' => 'required'


        ]);

        //create a new job using the request data
        $event = new Events;

        $event->title = request('title');
        $event->body = request('body');
        $event->start = request('start');
        $event->end = request('end');

        //Save it to the database
        $event->save();

        session()->flash('message', 'You Posted an Event, Its going to be Lit!');


        // return to the home page
        return redirect('/admin/home');

    }


    public function destroyEvent($id)

    {

        $event = Events::find($id);
        $event->delete();

        return "success";
    }


    public function eventsnewsletter()
    {

        $events_newsletter_contacts =
            DB::table('contact_newsletters')
                ->join('contacts', 'contact_newsletters.contact_id', '=', 'contacts.id')
                ->join('newsletters', 'contact_newsletters.newsletter_id', '=', 'newsletters.id')
                ->select('contact_newsletters.id', 'newsletters.id', 'contacts.email')
                ->where('newsletters.id', '=', 2)
                ->get();



        // loop through all contacts on newsletter and send
        foreach ($events_newsletter_contacts as $contact) {

            \Mail::to($contact->email)->send(new eventsnewsletter());

        }



        return  'Your Message Blast is Underway!';


    }

}


