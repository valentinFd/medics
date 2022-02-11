<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNosesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noses', function (Blueprint $table) {
            $table->id();
            $table->enum('outer_form', ['straight', 'deformed']);
            $table->enum('mucous_membrane_1', ['pink', 'hyperemic', 'cyanotic', 'pale']);
            $table->enum('mucous_membrane_2', ['swollen', 'atrophic', 'hypertrophic']);
            $table->set('passages', ['clear', 'narrowed', 'adhesion', 'molding']);
            $table->set('phlegm', ['serous', 'mucous', 'purulent', 'bloody'])->nullable();
            $table->enum('septum', ['straight', 'deviated', 'perforated']);
            $table->enum('breathing', ['clear', 'labored']);
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
        Schema::dropIfExists('noses');
    }
}
