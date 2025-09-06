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
        Schema::create('locations_events', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('event_id')->nullable()->constrained('events');
            $table->foreignId('location_id')->nullable()->constrained('locations');
            $table->string('loc_date_time')->nullable();
            $table->string('descr_header')->nullable();
            $table->text('descr')->nullable();
            $table->foreignId('company_id')->nullable()->constrained('companies');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations_events');
    }
};
