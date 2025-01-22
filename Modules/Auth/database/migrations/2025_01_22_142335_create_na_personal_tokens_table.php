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
        Schema::create('na_personal_tokens', function (Blueprint $table) {
            $table->id();
            $table->morphs('napt_tokenable');
            $table->string('napt_name');
            $table->string('napt_token', 64)->unique();
            $table->text('napt_abilities')->nullable();
            $table->timestamp('napt_last_used_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('na_personal_tokens');
    }
};
