<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddToUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('surname');
            $table->string('city');
            $table->string('district');
            $table->string('zip_code');
            $table->string('street_name');
            $table->string('flat_number');
            $table->integer('AZN');
            $table->float('BTC');
            $table->float('ETH');
            $table->float('XRP');
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
            $table->string('surname');
            $table->string('city');
            $table->string('district');
            $table->string('zip_code');
            $table->string('street_name');
            $table->string('flat_number');
            $table->integer('AZN');
            $table->float('BTC');
            $table->float('ETH');
            $table->float('XRP');
        });
    }
}
