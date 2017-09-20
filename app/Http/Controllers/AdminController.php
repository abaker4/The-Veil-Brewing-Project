<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Taproom;
use App\Events;
use App\Jobs;
use App\Contact;
use League\Flysystem\Exception;
use Illuminate\Support\Facades\DB;
use App\Mail\tapnewsletter;
use App\Mail\eventsnewsletter;
use App\Mail\generalnewsletter;
use Carbon\Carbon;



class AdminController extends Controller
{
    /**
     * Create a new controller instance.
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


    /**
     * @return string
     */
    public function generalNewsletter()
    {
        $general_newsletter_contacts =
            DB::table('contact_newsletters')
                ->join('contacts', 'contact_newsletters.contact_id', '=', 'contacts.id')
                ->join('newsletters', 'contact_newsletters.newsletter_id', '=', 'newsletters.id')
                ->select('contact_newsletters.id', 'newsletters.id', 'contacts.email')
                ->where('newsletters.id', '=', 3)
                ->get();


        // loop through all contacts on newsletter and send email
        foreach ($general_newsletter_contacts as $contact) {

            \Mail::to($contact->email)->send(new generalnewsletter());

        }

        return 'Your mail blast is underway';
    }



    // TAPS

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function createTap()
    {
        return view('admin.taproom.create');

    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
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
        //form validation
        $this->validate($request, [

            'title' => 'required',

            'type' => 'required',

            'ABV' => 'required',

            'small' => 'required',

            'large' => 'required',

        ]);

        $data = $request->all();
        //instantiate a new taproom object and look for the data-id
        $tap = Taproom::find($data['id']);

        //handling form input
        $tap->title = $data['title'];
        $tap->type = $data['type'];
        $tap->ABV = $data['ABV'];
        $tap->small = $data['small'];
        $tap->large = $data['large'];
        $tap->save();

        //flash success message
        session()->flash('message', 'Your new brew has now been added');

        return redirect('/admin/home');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
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

        //instantiate a new taproom object
        $tap = new Taproom();

        //handling form input
        $tap->title = $data['title'];
        $tap->type = $data['type'];
        $tap->ABV = $data['ABV'];
        $tap->small = $data['small'];
        $tap->large = $data['large'];
        $tap->save();

        //flash success message
        session()->flash('message', 'Your new brew has now been added');

        return redirect('admin/home');
    }


    /**
     * @param $id
     * @return string
     */
    public function destroyTap($id)
    {
        $tap = Taproom::find($id);
        $tap->delete();

        return "success";
    }

    /**
     * @return string
     */
    public function tapNewsletter()
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


    // JOBS

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function createJob()
    {

        return view('admin.jobs.create');
    }


    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function editJob($id)
    {

        $jobs = Jobs::find($id);

        return view('admin.jobs.edit', compact('jobs'));

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function storeJob(Request $request)
    {
        //form validation
        $this->validate(request(), [

            'title' => 'required',

            'summary' => 'required',

            'q_description' => 'required',

            'responsibilities' => 'required'

        ]);


        $data = $request->all();
        //instantiate a new jobs object looking for the data-id
        $job = Jobs::find($data['id']);

        //handling form input
        $job->title = $data['title'];
        $job->summary = $data['summary'];
        $job->q_description = $data['q_description'];
        $job->responsibilities = $data['responsibilities'];
        $job->save();

        //flash successs message
        session()->flash('message', 'Thanks for Posting That Job! Team Work Makes the Dream Work!');


        return redirect('/admin/home');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function newJob()
    {
        //form validation
        $this->validate(request(), [

            'title' => 'required',

            'summary' => 'required',

            'q_description' => 'required',

            'responsibilities' => 'required',
        ]);

        //instantiate a new jobs object
        $job = new Jobs;

        //handling form input
        $job->title = request('title');
        $job->summary = request('summary');
        $job->q_description = request('q_description');
        $job->responsibilities = request('responsibilities');
        $job->save();

        // flash success message
        session()->flash('message', 'Thanks for Posting That Job! Team Work Makes the Dream Work!');


        return redirect('/admin/home');
    }

    /**
     * @param $id
     * @return string
     */
    public function destroyJob($id)
    {
        $job = Jobs::find($id);
        $job->delete();

        return "success";
    }



    // EVENTS

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function createEvent()
    {
        $events = Events::all();

        return view('admin.events.create', compact('events'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function editEvent($id)
    {
        $events = Events::find($id);

        return view('admin.events.edit', compact('events'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function storeEvent(Request $request)
    {

        //form validation
        $this->validate(request(), [

            'title' => 'required',

            'body' => 'required',

            'start' => 'required',

            'end' => 'required'
        ]);

        $data = $request->all();

        //instantiate a new events object looking for the data-id
        $event = Events::find($data['id']);

        //handling form input
        $event->title = $data['title'];
        $event->body = $data['body'];
        $event->start = $data['start'];
        $event->end = $data['end'];
        $event->save();

        //flash success message
        session()->flash('message', 'Your new event has now been added');

        return redirect('/admin/home');

    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function newEvent()
    {

        //form validation
        $this->validate(request(), [

            'title' => 'required',

            'body' => 'required',

            'start' => 'required',

            'end' => 'required'

        ]);

        //instantiate a new events object
        $event = new Events;

        //handling form input
        $event->title = request('title');
        $event->body = request('body');
        $event->start = request('start');
        $event->end = request('end');
        $event->save();

        //flash success message
        session()->flash('message', 'Your new event has now been added!');

        return redirect('/admin/home');
    }

    /**
     * @param $id
     * @return string
     */
    public function destroyEvent($id)
    {
        $event = Events::find($id);
        $event->delete();

        return "success";
    }

    /**
     * @return string
     */
    public function eventsNewsletter()
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


