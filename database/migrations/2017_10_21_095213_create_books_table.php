<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('selected_city');
            $table->tinyInteger('trip');
            $table->text('start_point');
            $table->text('end_point');
            $table->string('distance');
            $table->date('pick_up_time');
            $table->tinyInteger('hour');
            $table->tinyInteger('min');
            $table->string('am_pm');
            $table->string('mobile_number');
            $table->tinyInteger('number_of_auto');
            $table->text('short_description');
            $table->float('fare');
            $table->string('booking_time');
            $table->string('auto_no')->nullable();

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
        Schema::dropIfExists('books');
    }
}
