<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('TitreFr')->nullable(false);
            $table->string('TitreEn')->nullable(false);
            $table->string('DescriptionFr')->nullable(false);
            $table->string('DescriptionEn')->nullable(false);
            $table->string('Picture')->nullable();
            $table->string('Empty1')->nullable();
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
        Schema::dropIfExists('services');
    }
}
