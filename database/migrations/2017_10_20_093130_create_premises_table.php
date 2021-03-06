<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePremisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('premises', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fin')->nullable();
            $table->string('registration_date')->nullable();
            $table->string('name')->nullable();
            $table->string('category')->nullable();
            $table->string('category_code')->nullable();
            $table->string('country')->nullable();
            $table->integer('region_id')->nullable();
            $table->integer('district_id')->nullable();
            $table->integer('ward_id')->nullable();
            $table->string('village')->nullable();
            $table->string('village_code')->nullable();
            $table->string('physical')->nullable();
            $table->integer('pharmacist_id')->nullable();
            $table->string('owners_ids')->nullable();
            $table->string('postal_address')->nullable();
            $table->string('fax')->nullable();
            $table->integer('pharmaceutical_personnel_id')->nullable();
            $table->string('submitted_dispenser_contract')->nullable();
            $table->string('permit_profit_amount')->nullable();
            $table->string('receipt_no')->nullable();
            $table->string('payment_date')->nullable();
            $table->string('remarks')->nullable();
            $table->string('data_entry_date')->nullable();
            $table->string('premise_fees_due')->nullable();
            $table->string('retention_due')->nullable();
            $table->string('renewal_status')->nullable();
            $table->string('black_book_list')->nullable();
            $table->string('extra_payment')->nullable();
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
        Schema::dropIfExists('premises');
    }
}
