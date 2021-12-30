<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToEstablishmentGalleryTable extends Migration
{
    /**
     * Run the migrations.
     *s
     * @return void
     */
    public function up()
    {
        Schema::table('establishment_gallery', function (Blueprint $table) {
            $table->enum('status', ['accept','pending','reject'])->default('pending')->after('establishment_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('establishment_gallery', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}
