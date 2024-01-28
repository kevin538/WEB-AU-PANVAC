<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('NumeroTelephone')->nullable();
            $table->string('companyEmail')->nullable();
            $table->string('emailContact')->nullable();
            $table->string('Address')->nullable();
            $table->string('LienFacebook')->nullable();
            $table->string('LienTwitter')->nullable();
            $table->string('LienIntagram')->nullable();
            $table->string('LienLinkedin')->nullable();
            $table->text('TitleAboutUsFr')->nullable();
            $table->text('TitleAboutUsEn')->nullable();
            $table->longText('AboutUsFr')->nullable();
            $table->longText('AboutUsEn')->nullable();
            $table->string('Logo')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
