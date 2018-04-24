<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inc_reports', function (Blueprint $table) {
            $table->increments('rep_id');
            $table->string('inc_desc');
            $table->string('rep_desc');
            $table->time('rep_time');
            $table->date('rep_date');
            $table->string('rep_address');
            $table->string('rep_status')->default('Pending');
            $table->binary('rep_img');
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
        Schema::dropIfExists('inc_reports');
    }
}
