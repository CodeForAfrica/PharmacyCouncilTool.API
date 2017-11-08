<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('accreditation_no');
            $table->string('region_id');
            $table->string('district_id');
            $table->string('ward_id');
            $table->string('street')->nullable();
            $table->integer('owner_id');
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
        Schema::dropIfExists('addos');
    }
}
