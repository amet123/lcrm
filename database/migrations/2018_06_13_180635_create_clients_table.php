<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('cc_emails');
            $table->string('job_position');
            $table->string('company');
            $table->string('primary_phone_number');
            $table->string('secondary_phone_number');
            $table->string('administrative_information');
            $table->string('customer_source');
            $table->string('location');
            $table->decimal('sales_discount', 8, 2);
            $table->decimal('rental_discount', 8, 2);    
            $table->decimal('account_information', 8, 2);    
            $table->decimal('credit_limit', 8, 2);    
            $table->decimal('reservation_payment_percentage', 8, 2);    
            $table->decimal('send_out_payment_percentage', 8, 2);    
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
        Schema::dropIfExists('clients');
    }
}
