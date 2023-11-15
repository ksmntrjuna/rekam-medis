<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treatment', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('brand_id');
            $table->string('code', 255)->nullable();
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->string('name', 255)->nullable();
            $table->timestamps();
            $table->string('treatment_position_id', 255)->nullable()->index('treatment_position_id');
            $table->unique(['code', 'brand_id', 'name']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('treatment');
    }
};
