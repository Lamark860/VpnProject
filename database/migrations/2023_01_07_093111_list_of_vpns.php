<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ListOfVpns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_of_vpns', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('cost');
            $table->text('name');
            $table->text('description');
            $table->text('image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('list_of_vpns');
    }
}
