<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestigationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investigations', function (Blueprint $table) {
            $table->id();
            $table->string('testDate')->nullable();
            $table->string('Cpeptide')->nullable();
            $table->string('hba1c')->nullable();
            $table->string('cholesterol')->nullable();
            $table->string('hdl')->nullable();
            $table->string('ldl')->nullable();
            $table->string('tg')->nullable();
            $table->string('ratio')->nullable();
            $table->string('cr')->nullable();
            $table->string('tsh')->nullable();
            $table->string('nextTest')->nullable();
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
        Schema::dropIfExists('investigations');
    }
}
