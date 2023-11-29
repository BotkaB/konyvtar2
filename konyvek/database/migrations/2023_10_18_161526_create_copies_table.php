<?php

use App\Models\Copy;
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
        Schema::create('copies', function (Blueprint $table) {
            $table->id('copy_id');
            $table->foreignId('book_id')->references('book_id')->on('books');
            //0: puhakötésű, 1: kemény
            $table->boolean('hardcovered')->default(0);
            $table->year('publication')->default(2000);
            //0: könyvtárban 1 felhnál, 2 selejtezésre ítélve
            $table->integer('status')->default(0);
            $table->timestamps();
        });

    Copy::create([
       
        'book_id' => 1, 
        'hardcovered'=>1,
        'status'=>1
    ]);

    Copy::create([
       
        'book_id' => 2, 
        'publication'=>2003,
        'status'=>1]);
    
    Copy::create([
       
        'book_id' => 3, 
        'hardcovered'=>1]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('copies');
    }
};
