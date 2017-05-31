<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Taproom;


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

        return view('admin.index', compact('taps'));



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


            return redirect ('admin/home');

        }


        public function deleteTap(Request $request)
        {
            $id = $request->id;
            $tap = Taproom::find($id);
            $tap->delete();

            return redirect ('/admin/home');
        }




//update

//create


//delete















    public function events()
    {


    }

    public function jobs()
    {


    }




    // get tap detail
    // edit tap get/post
    // delete tap


}


