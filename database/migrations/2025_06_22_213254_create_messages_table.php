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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('type')->nullable();
            $table->date('publish_date')->nullable();
            $table->time('publish_time')->nullable();
            $table->string('title')->nullable();
            $table->text('message')->nullable();
            $table->string('picture')->nullable();
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->foreignId('company_id')->nullable()->constrained('companies');
            $table->integer('highlight_entry')->default(0);
            $table->integer('block_comments')->default(0);
            $table->integer('block_reactions')->default(0);
            $table->integer('who_can_see')->default(0);
            $table->foreignId('event_id')->nullable()->constrained('events');
            $table->foreignId('material_id')->nullable()->constrained('materials');
            $table->integer('academy_material_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
