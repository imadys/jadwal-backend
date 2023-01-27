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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('topic');
            $table->integer('location');
            $table->text('description');
            $table->text('custom_link');
            $table->text('meeting_url');
            $table->date('start_date');
            $table->integer('duration');
            $table->tinyInteger('color');
            $table->tinyInteger('platform');
            $table->tinyInteger('status');
            $table->softDeletes();
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
        Schema::dropIfExists('appointments');
    }
};
