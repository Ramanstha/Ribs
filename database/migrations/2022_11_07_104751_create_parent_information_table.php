<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parent_information', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('personalinformation_id');
            $table->string('fathername');
            $table->string('femail')->nullable();
            $table->string('fprofession');
            $table->string('fphone');
            $table->string('mothername');
            $table->string('memail')->nullable();
            $table->string('mprofession');
            $table->string('mphone');
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
        Schema::dropIfExists('parent_information');
    }
}
