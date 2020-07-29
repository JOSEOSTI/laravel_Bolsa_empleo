<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql-bolsa-empleo')->create('languages', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('professional_id')->constrained('professionals');
            $table->string('description');
            $table->string('written_level');
            $table->string('spoken_level');
            $table->string('reading_level');
            $table->string('state')->default('ACTIVE');
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
        Schema::connection('pgsql-bolsa-empleo')->dropIfExists('languages_');
    }
}
