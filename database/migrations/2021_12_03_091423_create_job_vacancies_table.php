<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_vacancies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('address')->nullable();
            $table->integer('zipcode')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('type_of_contract')->nullable();
            $table->string('contract_length')->nullable();
            $table->string('type_of_employement')->nullable();
            $table->string('contract_start_date')->nullable();
            $table->string('min_salary')->nullable();
            $table->string('max_salary')->nullable();
            $table->string('min_experience')->nullable();
            $table->string('deadline_of_applications')->nullable();
            $table->string('add_deadline')->nullable();
            $table->string('contract_through')->nullable();
            $table->longText('job_desc')->nullable();
            $table->longText('employment_mission')->nullable();
            $table->longText('looking_for')->nullable();
            $table->string('view_count')->nullable();
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
        Schema::dropIfExists('job_vacancies');
    }
}
