<?php

namespace App\Http\Controllers;

use App\Model\Contact;
use App\Model\Hope_news;
use App\Model\Order_hope;
use App\Model\OrderDonate;
use App\Model\Packets;
use App\Model\Pots;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
//=================================================================================================
//================================[Order Now]=====================================================
//=================================================================================================

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createPots()
    {

        return view('pots');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePots(Request $request)
    {
        //
        // return $request;
        $order=Pots::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'address'=>$request->address,
            'date'=>$request->date,
            'white'=>$request->white,
            'gray'=>$request->gray,
            'black'=>$request->black,
            'yellow'=>$request->yellow,
            'blue'=>$request->blue,
            'red'=>$request->red,
            'green'=>$request->green,
            'brown'=>$request->brown,
            'orange'=>$request->orange,
            'pink'=>$request->pink,
            'purple'=>$request->purple,
            'comment'=>$request->comment

            // 'comment'=>$request->message
        ]);


        return redirect("confirm");
        // return redirect("confirm")->with('success', 'Your Order Is success');

    }


    public function destroyorder(Request $request){
        // return $request;
        $id=$request->id;
        $OrderDonate=Pots::find($id)->delete();
        return redirect()->route('home')->with('success', 'Deleted success');
    }
    /**
     * show Order a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


// public function showOrder(){
//     $orders=Pots::select()->get();
//     // return $orders;
//     return view('dashboard',compact('orders'));
// }



//=================================================================================================
//================================[Donate Now]=====================================================
//=================================================================================================
/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createPackets(Request $request)
    {
        // return $request;
        // $type=$request->type;
        return view('packets');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePackets(Request $request)
    {
        //
        // return $request;
        $order=Packets::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'address'=>$request->address,
            'date'=>$request->date,
            // 'shelter'=>$request->shelter,
            // 'type'=>$request->type,
            'amount'=>$request->amount,
            'comment'=>$request->message
        ]);

        return redirect("confirm");
        // return redirect("confirm")->with('success', 'Your Order Is success');

    }
public function destroyPackets(Request $request){
    // return $request;
    $id=$request->id;
    $OrderDonate=Packets::find($id)->delete();
    return redirect()->route('Packetsdashboard')->with('success', 'Deleted success');
}
    /**
     * show Order a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


public function showPackets(){

    $orders=Packets::select()->get();
    // return $orders;
    return view('Packetsdashboard',compact('orders'));
}
//=================================================================================================
//================================[Contact ]=====================================================
//=================================================================================================

/**
     * show Contact a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

public function showContact(){
    $contacts=Contact::select()->get();
    // return $orders;
    return view('dashboardContact',compact('contacts'));
}



    /**
     * Store comment a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_comment(Request $request)
    {
        //
        // return $request;

        $comment=Contact::create([
            'name'=>$request->name,
            'email'=>$request->email,
        ]);

        return redirect("/")->with('success', 'Send success');


    }
    public function destroyComment(Request $request){
        // return $request;
        $id=$request->id;
        $OrderDonate=Contact::find($id)->delete();
        return redirect()->route('dashboardContact')->with('success', 'Deleted success');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
