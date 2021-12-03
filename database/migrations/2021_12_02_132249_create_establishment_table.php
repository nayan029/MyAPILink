<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstablishmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establishment', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type_of_establishment')->nullable();
            $table->string('own_of_our_structure')->nullable();
            $table->string('opening_date')->nullable();
            $table->string('year')->nullable();
            $table->string('direction')->nullable();
            $table->string('effective')->nullable();
            $table->string('number_of_groups_and_age_groups')->nullable();
            $table->string('accommodation_capacity')->nullable();
            $table->string('surface_area_of_the_establishment')->nullable();
            $table->string('garden')->nullable();
            $table->string('applied_pedagogy')->nullable();
            $table->string('our_values')->nullable();
            $table->string('document')->nullable();
            $table->string('more_infomation')->nullable();
            $table->integer('created_by')->nullable();
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
        Schema::dropIfExists('establishment');
    }
}
