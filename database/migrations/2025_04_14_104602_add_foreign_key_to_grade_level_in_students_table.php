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
            Schema::table('students', function (Blueprint $table) {
            // Add index if it doesn't exist
            $table->unsignedBigInteger('grade_level_id')->nullable()->change();
            $table->index('grade_level_id'); // <-- This adds the index
        
            $table->foreign('grade_level_id')
                ->references('grade_level_id')
                ->on('grade_level')
                ->onDelete('set null');
        });
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            //
        });
    }
};
