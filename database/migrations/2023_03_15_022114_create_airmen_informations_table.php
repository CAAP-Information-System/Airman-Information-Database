<?php
  
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
  
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airmens', function (Blueprint $table) {
            $table->id();
            // NAME SECTION
            $table->string('lname');
            $table->string('fname');
            $table->string('mname');
            // ADDRESS SECTION
            $table->string('address');
            $table->string('city');
            $table->string('province');
            $table->string('nationality');
            $table->string('country');
            $table->string('postal');
            $table->string('mobile');
            $table->string('phone');
            $table->string('company');
            $table->string('email');
            // IDENTITY SECTION
            $table->string('sex');
            $table->string('height');
            $table->string('weight');
            $table->string('hair');
            $table->string('eyes');
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
        Schema::dropIfExists('airmens');
    }
};
