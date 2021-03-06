<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaskoRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kasko_requests', function (Blueprint $table) {
            $table->id();
            $table->string('coupon_file');
            $table->string('name', 100);
            $table->string('phone', 50);
            $table->string('email', 50)->default('Няма');
            $table->enum('status', ['Нова заявка', 'Направена оферта', 'Сключена сделка', 'Архивирана'])->default('Нова заявка');
            $table->Text('message')->default('Няма бележи');
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
        Schema::dropIfExists('kasko_requests');
    }
}
