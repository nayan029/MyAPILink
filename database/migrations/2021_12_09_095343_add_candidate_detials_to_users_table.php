<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCandidateDetialsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->longText('about_me')->nullable();
            $table->string('current_situation')->nullable();
            $table->string('research')->nullable();
            $table->string('available_day')->nullable();
            $table->string('available_time')->nullable();
            $table->string('diplomas')->nullable();
            $table->string('seniority')->nullable();
            $table->string('age_range')->nullable();
            $table->string('mobility')->nullable();
            $table->string('permit_vehicle')->nullable();
            $table->string('gander')->nullable();
            $table->string('dob')->nullable();
            $table->string('region')->nullable();
            $table->string('experiences_of')->nullable();
            $table->string('experiences_at')->nullable();
            $table->string('funcation')->nullable();
            $table->string('position')->nullable();
            $table->string('qualities')->nullable();
            $table->string('values')->nullable();
            $table->string('languages_spoken')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
