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
        Schema::create('na_users', function (Blueprint $table) {
            $table->id();
            $table->string('nau_name');
            $table->string('nau_email')->unique();
            $table->string('nau_password')->nullable();
            $table->string('nau_google_id')->nullable();
            $table->timestamp('nau_email_verified_at')->nullable();
            $table->timestamp('nau_profile_photo')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('na_users');
    }
};
