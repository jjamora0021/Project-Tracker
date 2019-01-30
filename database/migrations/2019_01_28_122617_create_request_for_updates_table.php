<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestForUpdatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_for_updates', function (Blueprint $table) {
            $table->increments('request_id');
            $table->string('requestor');
            $table->string('project_id');
            $table->string('project_code');
            $table->integer('boq_control_number');
            $table->integer('day_number');
            $table->integer('progress_update');
            $table->longText('comment');
            $table->string('status');
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
        Schema::dropIfExists('request_for_updates');
    }
}
