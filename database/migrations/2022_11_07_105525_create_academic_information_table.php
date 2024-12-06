<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academic_information', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('personalinformation_id');
            $table->string('alevel');
            $table->string('university');
            $table->string('passedyear');
            $table->string('symbol');
            $table->string('division');
            $table->string('faculty');
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
        Schema::dropIfExists('academic_information');
    }
}
