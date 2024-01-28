<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Projects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('Title')->nullable(false);
            $table->date('DOT')->nullable(false);
            $table->string('DescriptionFr')->nullable(false);
            $table->string('DescriptionEn')->nullable(false);
            $table->string('Picture')->nullable(false);
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
        //
        Schema::dropIfExists('projects');
    }
}
