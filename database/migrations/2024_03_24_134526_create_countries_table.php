<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->timestamps();
            $table->char('alpha2', 2);
            $table->char('alpha3', 3);
            $table->string('name');
            $table->boolean('is_active')->default(true);
            $table->softDeletes();
            $table->index('alpha2');
            $table->unique('alpha2');
            $table->unique('alpha3');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
