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
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('link')->nullable();
            $table->string('name')->nullable();
            $table->foreignId('event_id')->nullable()->constrained('events');
            $table->integer('type')->default(0);
            $table->integer('id_group')->default(0);
            $table->integer('lp')->default(0);
            $table->integer('agenda_content_id')->default(0);
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->string('therapeutic_area')->nullable();
            $table->string('material_category')->nullable();
            $table->integer('rating')->default(0);
            $table->integer('is_doctor')->default(0);
            $table->string('material_qrcode')->nullable();
            $table->foreignId('company_id')->nullable()->constrained('companies');
            $table->dateTime('publication_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materials');
    }
};
