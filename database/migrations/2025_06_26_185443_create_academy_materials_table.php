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
        Schema::create('academy_materials', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('company_id')->nullable()->constrained('companies');
            $table->foreignId('id_academy_category')->nullable()->constrained('academy_categories');
            $table->string('name')->nullable();
            $table->integer('lp')->default(0);
            $table->integer('type')->default(0);
            $table->string('link')->nullable();
            $table->string('tags')->nullable();
            $table->string('qrcode')->nullable();
            $table->string('therapeutic_area')->nullable();
            $table->foreignId('group_id')->nullable()->constrained('groups');
            $table->string('rating')->nullable();
            $table->date('publication_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academy_materials');
    }
};
