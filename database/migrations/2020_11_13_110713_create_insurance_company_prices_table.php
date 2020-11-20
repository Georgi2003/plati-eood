<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsuranceCompanyPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insurance_company_prices', function (Blueprint $table) {
            $table->id();
            $table->string('vehicle_type', 100);
            $table->integer('kW');
            $table->integer('horse_power');
            $table->integer('volume');
            $table->string('vehicle_registration_code', 100);
            $table->integer('year_production');
            $table->integer('payments_count');

            $table->unsignedBigInteger('insurance_company_id');
            $table->foreign('insurance_company_id')->references('id')->on('insurance_companies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('insurance_company_prices');
    }
}
