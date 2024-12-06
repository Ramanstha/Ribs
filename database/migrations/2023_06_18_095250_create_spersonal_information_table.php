<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpersonalInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spersonal_information', function (Blueprint $table) {
            $table->id();
            $table->String('sfield');
            $table->String('attachment');
            $table->String('fname');
            $table->String('mname')->nullable();
            $table->String('lname');
            $table->String('cell');
            $table->String('email')->nullable();
            $table->String('address');
            $table->String('city');
            $table->String('muncipality');
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
        Schema::dropIfExists('spersonal_information');
    }
}
