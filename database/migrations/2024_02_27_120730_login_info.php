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
        Schema::create('login_info', function (Blueprint $table) {
            $table->id(); // Auto-incremental primary key
            $table->string('admin_id')->reference('id')->on("admin_info");
            $table->string('password');
            $table->timestamps(); // Created_at and updated_at columns for tracking timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
    }
};
