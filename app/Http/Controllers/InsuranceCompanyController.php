<?php

namespace App\Http\Controllers;

use App\Models\InsuranceCompany;
use Illuminate\Http\Request;

class InsuranceCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $insuranceCompanies = InsuranceCompany::all();
        
        return view('insuranceCompanies.index', [
            'allInsuranceCompanies' => $insuranceCompanies     
        ]);
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
     * @param  \App\Models\InsuranceCompany  $insuranceCompany
     * @return \Illuminate\Http\Response
     */
    public function show(InsuranceCompany $insuranceCompany)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InsuranceCompany  $insuranceCompany
     * @return \Illuminate\Http\Response
     */
    public function edit(InsuranceCompany $insuranceCompany)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InsuranceCompany  $insuranceCompany
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InsuranceCompany $insuranceCompany)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InsuranceCompany  $insuranceCompany
     * @return \Illuminate\Http\Response
     */
    public function destroy(InsuranceCompany $insuranceCompany)
    {
        //
    }
}
