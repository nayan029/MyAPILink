<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstablishmentGalleryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establishment_gallery', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->integer('establishment_id');
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
        Schema::dropIfExists('establishment_gallery');
    }
}
