<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Taproom;

class TaproomController extends Controller
{
    public function index(Taproom $taproom)
    {
        $taproom = $taproom->all();

        return view('public.taproom', compact('taproom'));
    }
}
