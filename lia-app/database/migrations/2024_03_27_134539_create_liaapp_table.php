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
            //$table->integer('age')->nullable();
            //icke obligatoriska:
            $table->string('phone')->nullable();
            $table->timestamps();
        });

        Schema::create('studentLiaInfo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('studentId');
            $table->foreign('studentId')->references('id')->on('students')->onDelete('cascade');
            $table->string('study'); //WU eller DD
            $table->string('city')->nullable(); //Din ort
            $table->string('about')->nullable(); //Om dig
            $table->string('education')->nullable(); //Utbildningar
            $table->string('work')->nullable(); //Arbetslivserfarenhet
            $table->string('interests')->nullable(); //Intressen
            $table->string('skills')->nullable(); //Färdigheter
            //icke obligatoriska:
            $table->string('portfolio')->nullable(); //LÄNKAR
            $table->string('linkedin')->nullable(); //LÄNKAR
            $table->timestamps();
        });


        /** FÖRETAG **/
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('companyName');
            $table->string('companyEmail')->unique();
            $table->string('password');
            $table->string('contactPerson');
            $table->string('description')->nullable();
            $table->string('industry');
            $table->string('employees');
            $table->string('language');
            //icke obligatoriska:
            $table->string('linkedin')->nullable();
            $table->string('homepage')->nullable();
            $table->string('adress')->nullable();
            $table->string('phone')->nullable();
            $table->timestamps();
        });

        Schema::create('companyLiaInfo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('companyId');
            $table->foreign('companyId')->references('id')->on('companies')->onDelete('cascade');
            $table->string('title')->nullable(); //Annonstitel
            $table->string('description')->nullable(); //Om praktikplatsen
            $table->string('yourJob')->nullable(); //Arbetsuppgifter
            $table->string('offer')->nullable(); //Vad de erbjuder
            $table->string('lookingFor')->nullable(); //Din profil, vad de söker
            $table->string('study')->nullable(); //WU eller DD
            $table->integer('availableSpots')->nullable(); //Tillgängliga platser
            $table->timestamps();
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
