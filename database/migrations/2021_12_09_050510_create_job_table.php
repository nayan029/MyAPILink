<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->string('title')->nullable();
            $table->string('address')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('type_of_contract')->nullable();
            $table->string('contract_length')->nullable();
            $table->string('type_of_employment')->nullable();
            $table->string('contract_start_date')->nullable();
            $table->string('minimum_gross_salary')->nullable();
            $table->string('maximum_gross_salary')->nullable();
            $table->string('minimum_experience')->nullable();   
            $table->string('deadline_for_receipt_of_applications')->nullable();   
            $table->string('email')->nullable();   
            $table->string('phone')->nullable();   
            $table->string('contact_thorugh')->nullable();   
            $table->string('website')->nullable();   
            $table->string('job_description')->nullable();   
            $table->string('employment_mission')->nullable();   
            $table->string('what_you_are_looking')->nullable();   
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
        Schema::dropIfExists('job');
    }
}
