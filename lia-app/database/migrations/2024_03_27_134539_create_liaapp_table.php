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
        /*Schema::create('liaapp', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });*/
        Schema::create('students', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('email');
            $table->string('class');
            //icke obligatoriska:
            $table->string('cv');
            $table->string('portfolio');
            $table->string('linkedin');
            $table->string('phone');
        });

        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->string('adress');
            $table->string('WuDd'); //ev, två bool rader
            $table->integer('availableSpots');
            $table->string('email');
            //$table->string('kompetenser'); borde gå in i description?
            //icke obligatoriska:
            $table->string('phone');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('liaapp');
    }
};
