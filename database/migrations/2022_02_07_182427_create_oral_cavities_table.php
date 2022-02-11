<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOralCavitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oral_cavities', function (Blueprint $table) {
            $table->id();
            $table->set('throat1', ['pink', 'hyperemic', 'cyanotic', 'pale']);
            $table->set('throat2', ['swollen', 'atrophic', 'hypertrophic']);
            $table->enum('tonsils', ['normal_size', 'increased']);
            $table->boolean('tonsil_stones');
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
        Schema::dropIfExists('oral_cavities');
    }
}
