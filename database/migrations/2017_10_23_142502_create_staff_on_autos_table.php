<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffOnAutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_on_autos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('staff_id');
            $table->integer('auto_id');
            $table->date('appoint_date');
            $table->date('dismisal_date')->nullable();

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
        Schema::dropIfExists('staff_on_autos');
    }
}
