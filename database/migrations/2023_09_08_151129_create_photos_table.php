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
        Schema::create('photos', function (Blueprint $table) {
            $table->string('id', 36)->primary();
            $table->string('nobase', 100)->index('nobase_index');
            $table->string('patient_name')->nullable()->index('branch_index');
            $table->string('branch', 255);
            $table->string('user_id', 36)->index('photo_user_id');
            $table->string('position', 255)->index('position_index');
            $table->string('photo', 255);
            $table->dateTime('date');
            $table->timestamps();
            $table->string('treatment_code', 255)->nullable()->index('treatment_code_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photos');
    }
};
