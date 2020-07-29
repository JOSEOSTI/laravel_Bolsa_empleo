<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessionalReferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql-bolsa-empleo')->create('professional_references', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('professional_id')->constrained('professionals');
            $table->string('institution');
            $table->string('position');
            $table->string('contact');
            $table->string('phone');
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
        Schema::connection('pgsql-bolsa-empleo')->dropIfExists('professional_references');
    }
}
