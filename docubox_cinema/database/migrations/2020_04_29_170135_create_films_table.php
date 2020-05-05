<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('FilmTitle');
            $table->string('link_to_film');
            $table->string('Film_Type')->nullable();
            $table->string('Film_Poster');
            $table->bigInteger('duration');
            $table->bigInteger('film_maker_id');
            $table->longText('plot');
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
        Schema::dropIfExists('films');
    }
}
