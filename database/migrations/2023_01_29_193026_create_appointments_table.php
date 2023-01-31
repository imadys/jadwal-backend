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
            $table->string('topic');
            $table->integer('location');
            $table->text('description');
            $table->text('meeting_url');
            $table->date('start_date');
            $table->integer('duration');
            $table->unsignedBigInteger('service_id');
            $table->tinyInteger('platform');
            $table->tinyInteger('status');
            $table->softDeletes();
            $table->timestamps();


            $table->foreign('service_id')->references('id')->on('services');

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
