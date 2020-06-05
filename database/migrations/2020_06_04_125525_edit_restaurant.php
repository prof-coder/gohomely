<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditRestaurant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('restuarants', function (Blueprint $table) {
            $table->dropColumn('hours_opening');
            $table->dropColumn('hours_closing');
            $table->string('cuisine')->nullable();
            $table->string('availability')->nullable();
            $table->string('sex')->nullable();
            $table->string('pin_code')->nullable();
            $table->string('about_chef')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
