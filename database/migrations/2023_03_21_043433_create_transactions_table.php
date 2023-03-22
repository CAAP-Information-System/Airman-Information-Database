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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('approving_id');
            $table->string('endorsing_id');
            $table->timestamp('ttype');
            $table->string('tdate');
            $table->string('datefinished')->nullable();
            $table->string('remarks');
            $table->string('createdby');
            $table->string('issuedby');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
