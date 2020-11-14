<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCivilResponsibilityRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('civil_responsibility_requests', function (Blueprint $table) {
            $table->id();
            $table->string('registration_number', 100);
            $table->string('coupon_number', 100);
            $table->string('coupon_file');
            $table->string('phone', 20);
            $table->string('adress', 100);
            $table->string('vehicle_type', 100);
            $table->integer('kW');
            $table->integer('horse_power');
            $table->integer('volume');
            $table->integer('year_production');
            $table->string('status', 50);
            $table->integer('payments_count');

            $table->unsignedBigInteger('insurance_company_id');
            $table->foreign('insurance_company_id')->references('id')->on('insurance_companies');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('civil_responsibility_requests');
    }
}
