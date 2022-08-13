<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Companies::all();

        // return view('le dossier dans lequel le fichier se trouve puis le nom du fichier, ici on est dans les views, dossier companies et fichier index.blade.php)
        return view('companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $companies = new Companies;

        $companies -> name = $request -> name;
        $companies -> adress = $request -> adress;
        $companies -> postal_code = $request -> postal_code;
        $companies -> city = $request -> city;
        $companies -> siret = $request -> siret;

        $companies -> save();

        return redirect() -> route('companies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Companies  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Companies $company)
    {
        return view('companies.show', compact('company'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Companies  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Companies $company)
    {
        $companies = Companies::all();
        $company = $companies -> find($company);

        return view('companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Companies  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Companies $company)
    {
        $company = Companies::select("*")->where(['id' => $company->id])->firstOrFail();

        $company -> name = $request -> name;
        $company -> adress = $request -> adress;
        $company -> postal_code = $request -> postal_code;
        $company -> city = $request -> city;
        $company -> siret = $request -> siret;

        $company -> save();

        return redirect() -> route('companies.show', $company -> id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Companies  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Companies $company)
    {
        $company = Companies::find($company -> id);
        
        $company -> delete();
        
        return redirect() -> route('companies.index');
    }
}
