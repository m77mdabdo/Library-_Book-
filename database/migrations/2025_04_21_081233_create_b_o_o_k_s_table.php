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
        // title ,desc ,image ,price , category_id ,user_id
        Schema::create('b_o_o_k_s', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("title", 255);
            $table->text("desc");
            $table->string("image", 255)->nullable();
            $table->decimal("price", 8, 2);
            $table->foreignId("category_id")->constrained()->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId("user_id")->constrained()->onUpdate("cascade")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('b_o_o_k_s');
    }
};
