<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNaissancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('naissances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->string('postnom');
            $table->string('prenom');
            $table->string('sexe');
            $table->string('lieu');
            $table->string('date');
            $table->string('nom_pere');
            $table->string('prenom_pere');  
            $table->string('date_pere');
            $table->string('lieu_pere');
            $table->string('profession');
            $table->string('domicile');
            $table->string('nom_mere');
            $table->string('prenom_mere');  
            $table->string('date_mere');
            $table->string('lieu_mere');
            $table->string('profession_mere');
            $table->string('domicile_mere');
            $table->string('tiers_declarant'); 
            $table->string('evenements_relatifs');          
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
        Schema::dropIfExists('naissances');
    }
}
