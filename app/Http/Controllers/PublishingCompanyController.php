<?php

namespace App\Http\Controllers;

use App\Http\Requests\PublishingCompanyRequest;
use App\Http\Requests\StorePublishingCompanyRequest;
use App\Http\Requests\UpdatePublishingCompanyRequest;
use App\PublishingCompany;
use Illuminate\Http\Request;

class PublishingCompanyController extends Controller
{

    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(PublishingCompany::class, 'publishingCompany');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publishingCompanies = PublishingCompany::all();
        return view('publishingCompanies.index', compact('publishingCompanies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $publishingCompany = new PublishingCompany();
        return view('publishingCompanies.create', compact('publishingCompany'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePublishingCompanyRequest $request)
    {
        PublishingCompany::create($request->all());
        return redirect()->route('publishingCompanies.index')->with('success', true);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PublishingCompany  $publishingCompany
     * @return \Illuminate\Http\Response
     */
    public function edit(PublishingCompany $publishingCompany)
    {
        return view('publishingCompanies.edit', compact('publishingCompany'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PublishingCompany  $publishingCompany
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePublishingCompanyRequest $request, PublishingCompany $publishingCompany)
    {
        $publishingCompany->update($request->all());
        return redirect()->route('publishingCompanies.index')->with('success', true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PublishingCompany  $publishingCompany
     * @return \Illuminate\Http\Response
     */
    public function destroy(PublishingCompany $publishingCompany)
    {
        $publishingCompany->delete();
        return redirect()->route('publishingCompanies.index')->with('success', true);
    }
}
