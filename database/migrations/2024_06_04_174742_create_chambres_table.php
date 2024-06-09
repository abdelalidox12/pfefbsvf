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
        Schema::create('chambres', function (Blueprint $table) {

            $table->id();
          
            $table->unsignedInteger(column:'n_place');
            $table->unsignedInteger(column:'num');
            $table->unsignedInteger(column:'n_etape');
            $table->date(column:'date_debut');
            $table->date(column:'date_fin');
            $table->double(column:'prix_vente');
            $table->double(column:'prix_achat');
            $table->string(column:'image1');
            $table->string(column:'image2');
            $table->string(column:'image3');
            $table->string(column:'image4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chambres');
    }
};
