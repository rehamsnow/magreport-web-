<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsAnnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_anns', function (Blueprint $table) {
            $table->increments('ann_id');
            $table->string('ann_title');
            $table->string('ann_desc');
            $table->date('ann_date');
            $table->time('ann_time');
            $table->string('ann_location');
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
        Schema::dropIfExists('news_anns');
    }
}
