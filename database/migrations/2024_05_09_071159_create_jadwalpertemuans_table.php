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
        Schema::create('jadwalpertemuans', function (Blueprint $table) {
            $table->id("jadwalpertemuan");
            $table->string("namadepan");
            $table->string("namabelakang");
            $table->integer("NIK");
            $table->text("keluhanpasien");
            $table->unsignedBigInteger('polidokter'); // Using unsignedBigInteger for the foreign key
            $table->unsignedBigInteger('namadokter'); // Using unsignedBigInteger for the foreign key
            $table->string("opsi");
            $table->timestamps();
            
            // Add foreign keys to ensure consistency with doctors table
            $table->foreign('polidokter')->references('iddokter')->on('doctors'); // Reference iddokter column in doctors table
            $table->foreign('namadokter')->references('iddokter')->on('doctors'); // Reference iddokter column in doctors table
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('jadwalpertemuans', function (Blueprint $table) {
            $table->dropForeign(['polidokter']);
            $table->dropForeign(['namadokter']);
        });
        Schema::dropIfExists('jadwalpertemuans');
    }
};
