<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('order_id');
            $table->string('cus_name');
            $table->string('cus_email');
            $table->string('cus_phone');
            $table->string('cus_address');
            $table->string('cus_postcode');
            $table->string('cus_state');
            $table->string('cus_country');
            $table->string('order_date');
            $table->string('order_time');
            $table->string('order_total_amount');
            $table->text('order_details');
            $table->string('payment_id');
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
        Schema::dropIfExists('orders');
    }
}
