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
        Schema::create('user_news', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('publish_date')->nullable();
            $table->time('publish_time')->nullable();
            $table->string('title')->nullable();
            $table->text('message')->nullable();
            $table->string('picture')->nullable();
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->foreignId('company_id')->nullable()->constrained('companies');
            $table->boolean('highlight_entry')->default(false);
            $table->boolean('block_comments')->default(false);
            $table->boolean('block_reactions')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_news');
    }
};
