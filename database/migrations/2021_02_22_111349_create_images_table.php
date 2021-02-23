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
            $table->string('url');
            $table->string('nom')->nullable();
            $table->string('type')->nullable();
            $table->boolean('produit')->nullable();
            $table->boolean('humain')->nullable();
            $table->boolean('institutionnelle')->nullable();
            $table->float('hauteur');
            $table->float('largeur');
            $table->string('credits')->nullable();
            $table->boolean('droitsLimites')->nullable();
            $table->dateTime('dateFinDroits')->nullable();
            $table->string('tags')->nullable();
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
