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
        Schema::create('treatment_position', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 255);
            $table->longText('position_id')->index('position_id');
            $table->longText('treatment_id')->nullable()->index('treatment_id');
            $table->longText('treatment_code')->nullable();
            $table->string('status', 1)->default('1');
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
        Schema::dropIfExists('treatment_position');
    }
};
