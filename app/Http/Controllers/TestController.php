<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;
use Validator;
use Illuminate\Support\Facades\Redirect; 
class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
            $data = Http::get('https://api.seatgeek.com/2/events?client_id=MjgxNDQ2MjZ8MTY1OTE2MzEyMy40MTc3NTI1');
            $id = $request['id'] ?? "";
             
            if($id != "") {
                
                $data1 = Http::get('https://api.seatgeek.com/2/events/'.$id.'?client_id=MjgxNDQ2MjZ8MTY1OTE2MzEyMy40MTc3NTI1');     
              //  $request['id']->only(['id', '/']);
                //unset($request['id']);
                return view('singleData', ['events' => $data1->collect()]);       
            }
        else{
                return view('listView', ['user' => $data->collect()]);
            } 
    
}

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data1 = Http::get('https://api.seatgeek.com/2/events/'.$id.'?client_id=MjgxNDQ2MjZ8MTY1OTE2MzEyMy40MTc3NTI1');   
        return view('singleData', ['events' => $data1->collect()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
