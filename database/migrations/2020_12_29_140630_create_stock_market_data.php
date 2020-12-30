<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockMarketData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_market_data', function (Blueprint $table) {
            $table->id('id');
            $table->string('date');
            $table->string('trade_code');
            $table->string('high');
            $table->string('low');
            $table->string('open');
            $table->string('close');
            $table->string('volume');
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
        Schema::dropIfExists('stock_market_data');
    }
}
