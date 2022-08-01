<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('creator_id')->nullable();
            $table->foreign('creator_id')->references('id')->on('users');
            $table->string('name');
            $table->string('education');
            $table->date('birthday');
            $table->string('experience');
            $table->string('last_position');
            $table->string('applied');
            $table->text('top_skill')->nullable();
            $table->string('email');
            $table->string('phone');
            $table->string('resume');
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
        Schema::dropIfExists('candidates');
    }
}
