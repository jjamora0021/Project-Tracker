<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDailyProgressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_progress', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id');
            $table->string('project_code');
            $table->integer('boq_control_number');
            $table->integer('day_number');
            $table->longText('progress');
            $table->integer('total_progress');
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
        Schema::dropIfExists('daily_progress');
    }
}
