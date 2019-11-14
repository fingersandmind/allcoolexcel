<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirconListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aircon_lists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('brand');
            $table->string('type');
            $table->string('model');
            $table->string('description');
            $table->string('cap');
            $table->float('srp',8,2)->nullable();
            $table->float('cost',8,2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aircon_lists');
    }
}
