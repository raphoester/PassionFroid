<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('type');
            $table->boolean('produit');
            $table->boolean('humain');
            $table->boolean('institutionnelle');
            $table->float('hauteur');
            $table->float('largeur');
            $table->string('credits');
            $table->boolean('droitsLimites');
            $table->dateTime('dateFinDroits');
            $table->string('tags');
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
        Schema::dropIfExists('images');
    }
}
