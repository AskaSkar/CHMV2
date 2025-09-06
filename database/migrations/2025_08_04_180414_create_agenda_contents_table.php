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
        Schema::create('agenda_contents', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('company_id')->constrained('companies');
            $table->foreignId( 'agenda_id')->constrained('agendas');
            $table->time('time_from')->nullable();
            $table->time('time_to')->nullable();
            $table->string('where')->nullable();
            $table->string('title')->nullable();
            $table->string('speakers')->nullable();
            $table->string('presenters')->nullable();
            $table->text('description')->nullable();
            $table->boolean('quiz')->default(0);
            $table->boolean('online')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agenda_contents');
    }
};
