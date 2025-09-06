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
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('company_id')->nullable()->constrained('companies');
            $table->integer('role')->default(0);
            $table->string('phone')->nullable();
            $table->string('npwz')->nullable();
            $table->string('address')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('city')->nullable();
            $table->string('pesel')->nullable();
            $table->boolean('business')->default(0);
            $table->string('nip')->nullable();
            $table->string('business_name')->nullable();
            $table->string('tax_office')->nullable();
            $table->integer('acceptance_of_the_rules')->default(0);
            $table->integer('acceptance_of_the_privacy_policy')->default(0);
            $table->integer('acceptance_of_receive_marketing_information')->default(0);
            $table->boolean('admin')->default(0);
            $table->boolean('news_editor')->default(0);
            $table->boolean('photo_booths_editor')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_company_id_foreign');
            $table->dropColumn('company_id');
        });
    }
};
