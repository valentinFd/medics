<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->string('id', 12);
            $table->date('date');
            $table->string('name', 50);
            $table->string('surname', 50);
            $table->string('complaints_and_history', 2000);
            $table->string('comorbidities', 200);
            $table->string('drug_intolerance_and_allergies', 300);
            $table->primary('id');
            $table->foreignId('nose_id')->constrained();
            $table->foreignId('oral_cavity_id')->constrained();
            $table->softDeletes();
            $table->timestampsTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
