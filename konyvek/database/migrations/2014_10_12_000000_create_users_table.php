<?php

use App\Models\User;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        User::create([
            'name' => 'Dóri', 
            'email' => 'dori@gmail.com', 
            'password' => 'blablabla']);
        User::create([
            'name' => 'Alexa', 
            'email' => 'alexa@gmail.com', 
            'password' => 'blablabla']);
        User::create([
            'name' => 'Patrik', 
            'email' => 'patrik@gmail.com', 
            'password' => 'blablabla']);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
