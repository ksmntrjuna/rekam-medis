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
        Schema::create('outlets', function (Blueprint $table) {
            $table->increments('id_outlet');
            $table->string('code', 11)->nullable();
            $table->string('outlet_name', 255)->nullable();
            $table->string('outlet_name_pos', 255)->nullable();
            $table->string('outlet_type', 255)->nullable();
            $table->integer('outlet_status')->nullable();
            $table->string('outlet_address', 255)->nullable()->default('');
            $table->integer('id_city')->nullable();
            $table->string('outlet_postal_code', 11)->nullable();
            $table->string('outlet_phone', 255)->nullable()->default('');
            $table->string('outlet_email', 255)->nullable();
            $table->string('outlet_latitude', 21)->nullable();
            $table->string('outlet_longitude', 21)->nullable();
            $table->time('outlet_open_hours')->nullable();
            $table->time('outlet_close_hours')->nullable();
            $table->timestamps();
            $table->string('call', 21)->nullable();
            $table->integer('id_province')->nullable();
            $table->string('city_name', 21)->nullable();
            $table->string('city_type', 21)->nullable();
            $table->string('city_postal_code', 12)->nullable();
            $table->integer('id_outlet_photo')->nullable();
            $table->string('url_outlet_photo', 255)->nullable();
            $table->string('response', 255)->nullable();
            $table->string('merchant', 255)->nullable();
            $table->unsignedBigInteger('brand_id');
            $table->foreign('brand_id')->references('id')->on('brands');

            $table->index(['code', 'outlet_name_pos', 'outlet_address'], 'lookup');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('outlets');
    }
};
