<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creatives', function (Blueprint $table) {
            $table->id();
            $table->string('content');
            $table->string('video_id');
            $table->string('video_title');
            $table->string('first_card_title');
            $table->string('first_card_subtitle');
            $table->string('first_card_icon');
            $table->string('second_card_title');
            $table->string('second_card_subtitle');
            $table->string('second_card_icon');
            $table->string('third_card_title');
            $table->string('third_card_subtitle');
            $table->string('third_card_icon');
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
        Schema::dropIfExists('creatives');
    }
};
