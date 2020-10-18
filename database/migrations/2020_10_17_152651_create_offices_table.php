<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->integer('code');
            $table->string('city',255);
            $table->string('phone',255);
            $table->string('address1',255);
            $table->string('address2',255);
            $table->string('state',255);
            $table->string('country',255);
            $table->integer('postalCode');
            $table->string('territory',200);
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
        Schema::dropIfExists('offices');
    }
}
