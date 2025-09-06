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
        Schema::create('academy_categories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('parent_category_id')->default(0);
            $table->integer('lp')->default(0);
            $table->string('name')->nullable();
            $table->integer('type')->default(0);
            $table->foreignId('company_id')->nullable()->constrained('companies');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academy_categories');
    }
};
