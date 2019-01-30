<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project_code')->unique();
            $table->string('location');
            $table->string('ccid');
            $table->string('work_order_number')->unique();
            $table->string('site_name');
            $table->date('date_start');
            $table->date('date_end');
            $table->longText('boq_details');
            $table->integer('total_project_cost');
            $table->integer('total_project_qty');
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
        Schema::dropIfExists('projects');
    }
}
