<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('po_code')->nullable();
            $table->string('company');
            $table->string('supplier');
            $table->string('ref_no')->nullable();
            $table->string('term');
            $table->date('delivery_date');
            $table->date('valid_until');
            $table->string('ship_to');
            $table->string('location');
            $table->float('net_amount',8,2)->nullable();
            $table->float('vat_amount',8,2)->nullable();
            $table->float('total_amount',8,2)->nullable();
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
        Schema::dropIfExists('transactions');
    }
}
