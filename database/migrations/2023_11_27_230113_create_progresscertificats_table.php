<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgresscertificatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progresscertificats', function (Blueprint $table) {
            $table->id();
            $table->string('PanvacRef')->nullable(false);
            $table->date('DateReceived')->nullable(false);
            $table->date('DateExpected')->nullable(false);
            $table->string('Status')->nullable(false);
            $table->string('Stability')->nullable(false);
            $table->string('Identity')->nullable(false);
            $table->string('Sterility')->nullable(false);
            $table->string('Potency')->nullable(false);
            $table->string('Safety')->nullable(false);
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
        Schema::dropIfExists('progresscertificats');
    }
}
