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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name')->nullable();
            $table->date('date_from')->nullable();
            $table->date('date_to')->nullable();
            $table->string('bg_image')->nullable();
            $table->string('logo_image')->nullable();
            $table->string('icon_color')->default('#009FDA');
            $table->string('txt_light_color')->default('#FFFFFF');
            $table->string('txt_dark_color')->default('#001423');
            $table->string('bg_light_color')->default('#009FDA');
            $table->string('bg_dark_color')->default('#001965');
            $table->string('user_info1_txt')->nullable();
            $table->string('user_info2_txt')->nullable();
            $table->foreignId('company_id')->nullable()->constrained('companies');
            $table->integer('published')->default(0);
            $table->date('data_publication')->nullable();
            $table->string('description')->nullable();
            $table->string('eventscol')->default('');
            $table->date('date_registration_representative')->nullable();
            $table->integer('status')->default(0);
            $table->integer('participants_total')->default(0);
            $table->integer('inside')->default(0);
            $table->string('info')->nullable();
            $table->integer('coordinator_id')->default(0);
            $table->integer('events_type_id')->default(0);
            $table->integer('events_area_id')->default(0);
            $table->foreignId('location_id')->nullable()->constrained('locations');
            $table->date('data_publication_to')->nullable();
            $table->date('date_registration_representative_to')->nullable();
            $table->integer('with_hotel')->default(0);
            $table->integer('with_scientific_society')->default(0);
            $table->date('additional_registration_end_date')->nullable();
            $table->integer('btn_visible')->default(0);
            $table->integer('is_online')->default(0);
            $table->integer('number_registrations_central')->default(0);
            $table->integer('photobooth_access')->default(0);
            $table->date('photobooth_liked_strat_date')->nullable();
            $table->time('photobooth_liked_strat_time')->nullable();
            $table->date('photobooth_liked_end_date')->nullable();
            $table->time('photobooth_liked_end_time')->nullable();
            $table->integer('photobooth_liked_max_count')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
