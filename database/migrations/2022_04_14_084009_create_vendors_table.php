<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('name', 75);
            $table->string('phone', 30)
                ->unique();
            $table->string('email', 100)
                ->unique()
                ->nullable();
            $table->string('address');
            $table->unsignedBigInteger('bank_id');
            $table->string('account_number', 16)
                ->unique();
            $table->timestamps();
            $table->foreign('bank_id')->references('id')->on('banks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendors');
    }
}
