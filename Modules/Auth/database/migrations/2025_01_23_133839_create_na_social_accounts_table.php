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
        Schema::create('na_social_accounts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nasa_user_id');
            $table->string('nasa_provider_id')->unique();
            $table->string('nasa_provider_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('na_social_accounts');
    }
};
