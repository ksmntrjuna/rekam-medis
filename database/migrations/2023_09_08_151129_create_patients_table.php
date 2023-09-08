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
        Schema::create('patients', function (Blueprint $table) {
            $table->string('id', 36)->primary();
            $table->string('nobase', 100)->index('nobase_index');
            $table->string('name', 255);
            $table->string('telp', 20)->index('telp_index');
            $table->string('branch', 255)->nullable()->index('branch_index');
            $table->timestamps();
            $table->dateTime('last');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
};
