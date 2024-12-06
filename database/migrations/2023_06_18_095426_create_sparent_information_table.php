<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSparentInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sparent_information', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('spersonalinformation_id');
            $table->string('fathername')->nullable();
            $table->string('foccupation')->nullable();
            $table->string('faddress')->nullable();
            $table->string('fcell')->nullable();
            $table->string('mothername')->nullable();
            $table->string('moccupation')->nullable();
            $table->string('maddress')->nullable();
            $table->string('mcell')->nullable();
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
        Schema::dropIfExists('sparent_information');
    }
}
