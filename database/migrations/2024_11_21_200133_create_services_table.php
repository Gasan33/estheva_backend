<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('service_name');
            $table->text('service_description')->nullable();
            $table->decimal('service_price', 10, 2);
            $table->json('service_images')->nullable();
            $table->string('service_video')->nullable();
            $table->json('service_benefits')->nullable();
            $table->double('service_rating')->default(0);
            $table->integer('service_reviews')->default(0);
            $table->double('service_sale_tag')->nullable();
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
