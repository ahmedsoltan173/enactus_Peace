<?php

namespace App\Http\Controllers;

use App\Model\Order_hope;
use App\Model\Pots;
use Illuminate\Http\Request;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $orders=Pots::select()->get();
        // return $orders;
        return view('home',compact('orders'));
    }
    public function show()
    {

        return view('order');
    }
}
