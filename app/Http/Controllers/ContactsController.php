<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contacts::all();

        return view('contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contacts = new Contacts;

        $contacts -> first_name = $request -> first_name;
        $contacts -> last_name = $request -> last_name;
        $contacts -> job = $request -> job;
        $contacts -> email = $request -> email;
        $contacts -> phone = $request -> phone;
        $contacts -> company_id = $request -> company_id;

        $contacts -> save();

        return redirect() -> route('contacts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function show(Contacts $contact)
    {
        return view('contacts.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function edit(Contacts $contact)
    {
        $contacts = Contacts::all();
        $contact = $contacts -> find($contact);
        return view('contacts.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contacts $contact)
    {
        $contact = Contacts::select("*")->where(['id' => $contact->id])->firstOrFail();

        $contact -> first_name = $request -> first_name;
        $contact -> last_name = $request -> last_name;
        $contact -> job = $request -> job;
        $contact -> email = $request -> email;
        $contact -> phone = $request -> phone;
        $contact -> company_id = $request -> company_id;

        $contact -> save();

        return redirect() -> route('contacts.show', $contact -> id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contacts $contact)
    {
        $contact_delete = Contacts::find($contact -> id);
        
        $contact_delete -> delete();
        
        return redirect() -> route('contacts.index');
    }

}
