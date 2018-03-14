<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateAddosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('addos', function($table) {
            $table->renameColumn('accreditation_no', 'fin');
            $table->dropColumn('owner_id');
            $table->string('owners_ids')->after('street');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('addos', function($table) {
            $table->renameColumn('fin', 'accreditation_no');
            $table->integer('owner_ids');
            $table->dropColumn('owners');
        });
    }
}