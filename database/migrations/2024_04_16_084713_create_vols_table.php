<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vols', function (Blueprint $table) {
            $table->id();
            $table->string(column:'Nom_vol');
            $table->string(column:'Ville_depart');
            $table->string(column:'Ville_arrivee');
          
            // $table->date(column:'date_achat');
            $table->date(column:'date_depart');
            $table->date(column:'date_arrivée');
            $table->time(column:'H_depart');
            $table->time(column:'H_arrivage');
            $table->string(column:'type');
            $table->unsignedInteger(column:'N_place');
            $table->string(column:'image1');
            $table->string(column:'image2');
            $table->string(column:'image3');
            $table->string(column:'image4');
            $table->string(column:'image5');
            $table->double(column:'prix');
           
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vols');
    }
};
