<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificats', function (Blueprint $table) {
            $table->id();
            $table->string('PanvacRef')->nullable(false);
            $table->date('DateProduction')->nullable(false);
            $table->date('DateExpired')->nullable(false);
            $table->string('SubmittedBy')->nullable(false);
            $table->string('ProducedBy')->nullable(false);
            $table->string('VaccineType')->nullable(false);
            $table->string('BatchNumber')->nullable(false);
            $table->string('Code')->nullable(false);
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
        Schema::dropIfExists('certificats');
    }
}