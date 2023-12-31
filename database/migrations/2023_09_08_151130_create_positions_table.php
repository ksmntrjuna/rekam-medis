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
        Schema::create('positions', function (Blueprint $table) {
            $table->string('id', 36)->primary();
            $table->unsignedBigInteger('brand_id');
            $table->string('name', 255);
            $table->string('image', 255)->nullable();
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
            $table->string('role_id', 36)->index('position_role_id');
            
            $table->foreign('brand_id')->references('id')->on('brands');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('positions');
    }
};
