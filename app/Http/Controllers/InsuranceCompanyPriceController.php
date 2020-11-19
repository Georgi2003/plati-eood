<?php

namespace App\Http\Controllers;

use App\Models\InsuranceCompanyPrice;
use Illuminate\Http\Request;

class InsuranceCompanyPriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $insuranceCompanyPrice = InsuranceCompanyPrice::all();
        
        return view('tariffs.index', [
            'allInsuranceCompanyPrice' => $insuranceCompanyPrice,
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
        //dd($request['file']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InsuranceCompanyPrice  $insuranceCompanyPrice
     * @return \Illuminate\Http\Response
     */
    public function show(InsuranceCompanyPrice $insuranceCompanyPrice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InsuranceCompanyPrice  $insuranceCompanyPrice
     * @return \Illuminate\Http\Response
     */
    public function edit(InsuranceCompanyPrice $insuranceCompanyPrice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InsuranceCompanyPrice  $insuranceCompanyPrice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InsuranceCompanyPrice $insuranceCompanyPrice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InsuranceCompanyPrice  $insuranceCompanyPrice
     * @return \Illuminate\Http\Response
     */
    public function destroy(InsuranceCompanyPrice $insuranceCompanyPrice)
    {
        //
    }
}
