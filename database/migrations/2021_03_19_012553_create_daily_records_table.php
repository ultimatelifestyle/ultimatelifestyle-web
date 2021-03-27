<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDailyRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_records', function (Blueprint $table) {
            $table->id();
            $table->string('recDate')->nullable();
            $table->string('fbs')->nullable();
            $table->string('breakfast')->nullable();
            $table->string('nuts')->nullable();
            $table->string('lunch')->nullable();
            $table->string('rbs')->nullable();
            $table->string('fruits')->nullable();
            $table->string('dinner')->nullable();
            $table->string('bodyWeight')->nullable();
            $table->string('bloodPressure')->nullable();
            $table->string('heartRate')->nullable();
            $table->string('remarks')->nullable();
            $table->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('daily_records');
    }
}
