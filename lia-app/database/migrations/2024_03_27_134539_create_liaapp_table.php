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
        /** ELEVER **/
        Schema::create('students', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('studentName');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('age');
            //icke obligatoriska:
            $table->string('phone')->nullable();
        });

        Schema::create('studentLiaInfo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('studentId');
            $table->foreign('studentId')->references('id')->on('students')->onDelete('cascade');
            $table->string('study'); //WU eller DD
            $table->string('city'); //Din ort
            $table->string('about'); //Om dig
            $table->string('education'); //Utbildningar
            $table->string('work'); //Arbetslivserfarenhet
            $table->string('interests'); //Intressen
            $table->string('skills'); //Färdigheter
            //icke obligatoriska:
            $table->string('portfolio')->nullable(); //LÄNKAR
            $table->string('linkedin')->nullable(); //LÄNKAR
        });


        /** FÖRETAG **/
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('companyName');
            $table->string('companyEmail')->unique();
            $table->string('password');
            $table->string('email');
            $table->string('adress');
            //icke obligatoriska:
            $table->string('phone')->nullable();
        });

        Schema::create('companyLiaInfo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('companyId');
            $table->foreign('companyId')->references('id')->on('companies')->onDelete('cascade');
            $table->string('title'); //Annonstitel
            $table->string('description'); //Om praktikplatsen
            $table->string('yourJob'); //Arbetsuppgifter
            $table->string('offer'); //Vad de erbjuder
            $table->string('lookingFor'); //Din profil, vad de söker
            $table->string('study'); //WU eller DD
            $table->integer('availableSpots'); //Tillgängliga platser
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
