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
            $table->string('accreditation_no')->nullable();
            $table->string('region')->nullable();
            $table->string('district')->nullable();
            $table->string('ward')->nullable();
            $table->string('street')->nullable();
            $table->string('owner_firstname')->nullable();
            $table->string('owner_middlename')->nullable();
            $table->string('owner_surname')->nullable();
            $table->string('owner_phone')->nullable();
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
