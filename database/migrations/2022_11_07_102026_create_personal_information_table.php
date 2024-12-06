<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_information', function (Blueprint $table) {
            $table->id();
            $table->string('level');
            $table->string('subject');
            $table->string('fname');
            $table->string('mname')->nullable();
            $table->string('lname');
            $table->string('dobad')->nullable();
            $table->string('dobbs');
            $table->string('gender');
            $table->string('religion');
            $table->string('pcountry');
            $table->string('pprovince');
            $table->string('pdistrict');
            $table->string('pmunciplicity');
            $table->string('pward');
            $table->string('pemail');
            $table->string('pphone');
            $table->string('ccountry');
            $table->string('cprovince');
            $table->string('cdistrict');
            $table->string('cmunciplicity');
            $table->string('cward');
            $table->string('cemail');
            $table->string('cphone');
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
        Schema::dropIfExists('personal_information');
    }
}
