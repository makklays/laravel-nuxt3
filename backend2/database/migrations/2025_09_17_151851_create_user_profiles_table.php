<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();

            $table->string('name', '255');
            $table->string('country', '255');
            $table->string('address', '255');
            $table->string('postcode', '255');
            $table->string('id_code', '255');
            $table->date('birthday')->nullable()->default(null);
            $table->string('facebook', '255')->nullable();
            $table->string('linkedin', '255')->nullable();
            $table->json('phones')->nullable(); // json
            $table->string('mobile', '255')->nullable();
            $table->string('home', '255')->nullable();
            $table->integer('id_photo')->nullable();
            $table->json('interests')->nullable(); // json
            $table->string('email', '255');
            $table->string('password', '255')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_profiles');
    }
};

