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
            $table->string('studentName');
            $table->string('email')->unique();
            $table->string('password');
            //$table->string('class');
            $table->boolean('WU')->default(0);
            $table->boolean('DD')->default(0);
            //$table->integer('age');
            //icke obligatoriska:
            $table->string('skills')->nullable();
            $table->string('cv')->nullable();
            $table->string('portfolio')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('phone')->nullable();
        });

        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('companyName');
            $table->string('companyEmail')->unique();
            $table->string('password');
            $table->string('description');
            $table->string('adress');
            //$table->string('WuDd'); //ev, två bool rader
            $table->boolean('WU')->default(0);
            $table->boolean('DD')->default(0);
            $table->integer('availableSpots');
            $table->string('email');
            //$table->string('kompetenser'); borde gå in i description?
            //icke obligatoriska:
            $table->string('phone')->nullable();
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
