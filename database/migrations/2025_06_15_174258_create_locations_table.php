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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('loc_name')->nullable();
            $table->string('loc_stars')->nullable();
            $table->string('loc_city')->nullable();
            $table->string('loc_street')->nullable();
            $table->string('loc_zip_code')->nullable();
            $table->string('lat')->nullable();
            $table->string('lon')->nullable();
            $table->string('image')->nullable();
            $table->string('loc_phone')->nullable();
            $table->string('loc_email')->nullable();
            $table->text('loc_web')->nullable();
            $table->integer('is_restaurant')->default(0);
            $table->integer('is_hotel')->default(0);
            $table->foreignId('company_id')->nullable()->constrained('companies');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
