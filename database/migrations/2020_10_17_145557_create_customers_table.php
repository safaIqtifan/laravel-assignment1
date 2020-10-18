<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->integer('salesRepEmployee');
            $table->string('name',255);
            $table->string('firstName',255);
            $table->string('lastName',255);
            $table->string('phone',255);
            $table->string('address1',255);
            $table->string('address2',255);
            $table->string('city',255);
            $table->string('state',255);
            $table->integer('postalCode');
            $table->string('country',255);
            $table->decimal('creditLimit',19,0);
            $table->timestamps();

            $table->foreign('salesRepEmployee')->references('id')->on('employees');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
