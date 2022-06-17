<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class ContactFormController extends Controller
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

    public function display(){
        return view("contactform", ['name'=>"Bear Pear", "email"=>"email@email.com"]);
    }

    public function contact($name){
        // return view("contactform",['email'=>"email@email.com"])->with('name', $name)->with('email', 'email@email.com');
        return view("contactform",)->with('name', $name)->with('message', Employee::all())->with('email', 'email@email.com'); //using ORM query
    }

    public function sampleform($name, $email, $message = null){
        return view("contactform", compact('name', 'email', 'message'));
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
        $this->validate($request,[  
            'name'=>'required',  
             'list'=> 'required',  
            'dob'=>'required',  
        ]);  
           return "Thank you for contacting us, we will get back to you as soon as possible!!!";  
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
