<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Taproom;
use App\User;
use App\Events;
use App\Jobs;
use App\Contacts;



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
        $contacts = Contacts::all();

        return view('admin.index', compact('taps', 'events', 'jobs', 'contacts'));



    }




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


        return view('admin.taproom.edit',compact('tap') );

    }



    public function storeTap(Request $request)
    {



        $data = $request->all();
        $data['id'];



        $tap = Taproom::find($data['id']);

            $tap->title = $data['title'];
            $tap->type = $data['type'];
            $tap->ABV = $data['ABV'];
            $tap->small = $data['small'];
            $tap->large = $data['large'];

            $tap->save();



        $this->validate(request(),[

            'title' => 'required',

            'type' => 'required',

            'ABV' => 'required',

            'small' => 'required',

            'large' => 'required',

        ]);



        session()->flash('message', 'Your new brew has now been added');




        return redirect('/admin/home');

    }

        public function newTap()

        {

        //create a new tap using the request data
            $tap = new Taproom;

            $tap->title = request('title');
            $tap->type = request('type');
            $tap->ABV = request('ABV');
            $tap->small = request('small');
            $tap->large = request('large');


            //Save it to the database
            $tap->save();

            //form validation
            $this->validate(request(),[

                'title' => 'required',

                'type' => 'required',

                'ABV' => 'required',

                'small' => 'required',

                'large' => 'required',
            ]);


        // return to the home page
            return redirect ('admin/home');

        }


        public function destroyTap(Request $request)
        {

            $id = $request->id;
            $tap = Taproom::find($id);
            $tap->delete();

            return redirect ('/admin/home');
        }





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


        return view('admin.jobs.edit',compact('jobs') );

    }



    public function storeJob(Request $request)
    {



        $data = $request->all();
        $data['id'];



        $job = Jobs::find($data['id']);

        $job->title = $data['title'];
        $job->summary = $data['summary'];
        $job->q_description = $data['q_description'];
        $job->responsibilities = $data['responsibilities'];

        $job->save();



        $this->validate(request(),[

            'title' => 'required',

            'summary' => 'required',

            'q_description' => 'required',

            'responsibilities' => 'required'

        ]);



        session()->flash('message', 'Your new brew has now been added');




        return redirect('/admin/home');

    }

    public function newJob()

    {

        //create a new job using the request data
        $job = new Jobs;

        $job->title = request('title');
        $job->summary = request('summary');
        $job->q_description= request('q_description');
        $job->responsibilities = request('responsibilities');


        //Save it to the database
        $job->save();

        //form validation
        $this->validate(request(),[

            'title' => 'required',

            'summary' => 'required',

            'q_description' => 'required',

            'responsibilities' => 'required',
        ]);


        // return to the home page
        return redirect ('/admin/home');

    }


    public function destroyJob(Request $request)
    {

        $id = $request->id;
        $job = Jobs::find($id);
        $job->delete();

        return redirect ('/admin/home');
    }



    public function createEvent()
    {

        return view('admin.events.create');
    }


    public function showEvent()
    {

        return view('admin.events.detail');
    }




    public function editEvent($id)
    {

        $events = Events::find($id);


        return view('admin.events.edit',compact('events') );

    }



    public function storeEvent(Request $request)
    {



        $data = $request->all();
        $data['id'];



        $event = Events::find($data['id']);

        $event->title = $data['title'];
        $event->body = $data['body'];
        $event->save();



        $this->validate(request(),[

            'title' => 'required',

            'body' => 'required',
        ]);



        session()->flash('message', 'Your new event has now been added');




        return redirect('/admin/home');

    }

    public function newEvent()

    {

        //create a new job using the request data
        $event = new Events;

        $event->title = request('title');
        $event->body = request('body');


        //Save it to the database
        $event->save();

        //form validation
        $this->validate(request(),[

            'title' => 'required',

            'body' => 'required',

        ]);


        // return to the home page
        return redirect ('/admin/home');

    }


    public function destroyEvent(Request $request)
    {

        $id = $request->id;
        $event = Events::find($id);
        $event->delete();

        return redirect ('/admin/home');
    }





}


