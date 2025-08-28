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
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            //Texts
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('image')->nullable();
            $table->enum('text_horizontally' , ['right' , 'center' , 'left']);
            $table->enum('text_vertically' , ['top' , 'center' , 'bottom']);
            $table->string('text_color')->nullable();

            //Button & CTA
            $table->string('button_text')->nullable();
            $table->string('button_link')->nullable();
            $table->enum('button_horizontally' , ['right' , 'center' , 'left']);
            $table->enum('button_vertically' , ['top' , 'center' , 'bottom']);
            $table->string('button_color')->nullable();

            //ACTIVE
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sliders');
    }
};
