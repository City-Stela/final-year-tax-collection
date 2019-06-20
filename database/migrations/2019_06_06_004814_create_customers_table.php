<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('business_types_name');
            $table->decimal('business_types_amount',25,2)->default(0);
            $table->timestamps();
        });
        

        Schema::create('payment_methods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('payment_method_name');
            $table->timestamps();
        });

        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedBigInteger('business_type_id');
            $table->timestamps();

            $table->foreign('business_type_id')->references('id')->on('business_types')->onDelete('cascade');
        });

        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('payment_token');
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('payment_method_id');
            // $table->unsignedBigInteger('business_type_id');
            $table->timestamps();

            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('payment_method_id')->references('id')->on('payment_methods')->onDelete('cascade');
            // $table->foreign('business_type_id')->references('id')->on('business_types')->onDelete('cascade');
        });

        // Schema::create('business_type_payments', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->unsignedBigInteger('business_type_id');
        //     $table->unsignedBigInteger('payment_id');
        //     $table->timestamps();

            // $table->foreign('business_type_id')->references('id')->on('business_types')->onDelete('cascade');
        //     $table->foreign('payment_id')->references('id')->on('payments')->onDelete('cascade');

        // });


        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('business_types');
        Schema::dropIfExists('payment_methods');
        Schema::dropIfExists('customers');
        Schema::dropIfExists('payments');
        Schema::dropIfExists('business_type_payments');
    }
}
