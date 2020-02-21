<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegencyLicensePlatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regency_license_plates', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('regency_id')->index();
            $table->foreign('regency_id')->references('id')->on('regencies')->onDelete('cascade')->onUpdate('cascade');
            $table->uuid('license_plate_id')->index();
            $table->foreign('license_plate_id')->references('id')->on('license_plates')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('regency_license_plates');
    }
}
