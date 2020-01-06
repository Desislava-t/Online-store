<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');

            # Data obtained through the API response of PayPal
            $table->string('customer_first_name')->nullable();
            $table->string('customer_email')->nullable();
            $table->string('customer_last_name')->nullable();
            $table->string('customer_shipping_address')->nullable();
            $table->string('customer_country')->nullable();
            $table->string('customer_city')->nullable();
            $table->string('country_code')->nullable();
            $table->string('customer_information')->nullable();
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
        Schema::dropIfExists('payments');
    }
}
