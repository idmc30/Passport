<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $clients=Client::all();
        $clients=Client::where('user_id', Auth::user()->id)->get();
        return view('client',compact('clients'));
    }

    
}
