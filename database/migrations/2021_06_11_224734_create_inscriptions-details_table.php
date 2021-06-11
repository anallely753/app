<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscriptionsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscriptions-details', function (Blueprint $table) {
            $table->string('id-inscription')->references('inscription-id')->on('inscriptions');
            $table->string('id-user-details')->references('id-user')->on('inscriptions');
            $table->string('tiket');
            $table->boolean('full-payment');
            $table->string('scolarship');
            $table->string('pending');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscriptions-details');
    }
}
