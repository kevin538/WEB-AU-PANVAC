<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->id();
            $table->string('TitreFr')->nullable(false);
            $table->string('TitreEn')->nullable(false);
            $table->string('SloganFr')->nullable(false);
            $table->string('SloganEn')->nullable(false);
            $table->longText('DescriptionFr')->nullable(false);
            $table->longText('DescriptionEn')->nullable(false);
            $table->string('Image')->nullable(false);
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
        Schema::dropIfExists('albums');
    }
}
