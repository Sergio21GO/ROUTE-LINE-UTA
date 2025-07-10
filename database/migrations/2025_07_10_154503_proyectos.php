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
       Schema::create('proyectos', function (Blueprint $table) {
           $table->bigIncrements('id');

            $table->bigIncrements('Nombre');
            $table->bigIncrements('imagen');
            $table->bigIncrements('descripcion');
            $table->bigIncrements('url');
           
           $table->timestamps();
       });


        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
