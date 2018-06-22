<?php

namespace App\Http\Controllers;

use App\Fees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class FeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = $request->all();
        $fees = new Fees;
        $fees->student_number=$data['studentnumber'];;
        $fees->amount =$data['amount'];
        $fees->date_of_payment =$data['dateofpayment'];;
        
        $fees->save();

        return view('joel.index');
    }
    public function search(){


        $searchid=Input::get('searchid');
        $user=Fees::where('student_number','LIKE','%'.$searchid.'%')->get();
        if(count($user)>0)
            return view('joel.result')->withDetails($user)->withQuery($searchid);
        else return view('joel.index')->withMessage('Record Does not Exist');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fees  $fees
     * @return \Illuminate\Http\Response
     */
    public function show(Fees $fees)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fees  $fees
     * @return \Illuminate\Http\Response
     */
    public function edit(Fees $fees)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fees  $fees
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fees $fees)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fees  $fees
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fees $fees)
    {
        //
    }
    public function DisplayAll(){
        $viewall=Fees::get();
        $viewall=json_decode(json_encode($viewall));
        return view('joel.viewallresults')->with(compact('viewall'));
    }
}
