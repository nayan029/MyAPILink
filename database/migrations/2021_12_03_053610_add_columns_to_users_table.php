<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('civility')->after('id')->nullable();
            $table->string('first_name')->after('name')->nullable();
            $table->string('last_name')->after('first_name')->nullable();
            $table->string('telephone')->after('password')->nullable();
            $table->string('roles')->after('telephone')->nullable();
            $table->string('establishment_management')->after('roles')->nullable();
            $table->string('represent')->after('establishment_management')->nullable();
            $table->string('organization')->after('represent')->nullable();
            $table->string('number_of_establishments')->after('organization')->nullable();
            $table->string('address')->after('number_of_establishments')->nullable();
            $table->string('postal_code')->after('address')->nullable();
            $table->string('city')->after('postal_code')->nullable();
            $table->integer('user_type')->after('city')->nullable();
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
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('civility');
            
        });
    }
}
