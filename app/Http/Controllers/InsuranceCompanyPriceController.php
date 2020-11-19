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
        $fileName = $_FILES['file']['tmp_name'];
        
        $file = fopen($fileName, "r");

        $insuranceCompanyPriceData = [];
        $rowIndex = 0;
        while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
            if($rowIndex > 0){
                $vehicle_type = "";
                if (isset($column[0])) {
                    $vehicle_type = $column[0];
                }

                $kW = 0;
                if (isset($column[1])) {
                    $kW = $column[1];
                }

                $horse_power = 0;
                if (isset($column[2])) {
                    $horse_power = $column[2];
                }
                
                $volume = 0;
                if (isset($column[3])) {
                    $volume = $column[3];
                }

                $registration_number = "";
                if (isset($column[4])) {
                    $registration_number = $column[4];
                }

                $year_production = 0;
                if (isset($column[5])) {
                    $year_production = $column[5];
                }

                $payments_count = 0;
                if (isset($column[6])) {
                    $payments_count = $column[6];
                }

                $insuranceCompanyPriceData[] = [
                    'vehicle_type' => $vehicle_type,
                    'kW' => $kW,
                    'horse_power' => $horse_power,
                    'volume' => $volume,
                    'registration_number' => $registration_number,
                    'year_production' => $year_production,
                    'payments_count' => $payments_count,
                ];
                
            }
            $rowIndex++;
        }

        InsuranceCompanyPrice::insert($insuranceCompanyPriceData);
        return redirect('/tariffs')->with('success', 'Файлът успешно е качен!');
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
