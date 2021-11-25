<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillPositionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skill_position', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('skills_id')->unsigned()->index()->nullable();
            $table->string('position')->nullable();
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->foreign('skills_id')->references('id')->on('skills')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skill_position');
    }
}
