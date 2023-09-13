<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePositionsTreatmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('positions_treatments', function (Blueprint $table) {
            $table->id();
            $table->string('position_id', 36);
            $table->unsignedBigInteger('treatment_id');
            $table->foreign('position_id')->references('id')->on('positions');
            $table->foreign('treatment_id')->references('id')->on('treatments');
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
        Schema::dropIfExists('positions_treatments');
    }
}
