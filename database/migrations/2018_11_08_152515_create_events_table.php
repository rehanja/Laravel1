<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('eventName')->default('none');
            $table->string('reason')->default('none');
            $table->string('region')->default('none');
            $table->Integer('budget')->default(0);
            $table->date('startDate')->default(now());
            $table->time('startTime')->default(now());
            $table->time('endTime')->default(now());
            $table->bigInteger('vote')->default(0);;
            
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
        Schema::dropIfExists('events');
    }
}
