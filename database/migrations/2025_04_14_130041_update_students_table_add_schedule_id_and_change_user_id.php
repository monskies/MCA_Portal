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
        Schema::table('students', function(Blueprint $table){
            
            $table->unsignedBigInteger('document_id')->nullable()->after('semester')->index();

            $table->foreign('document_id')->references('id')->on('documents')->onDelete('set null');
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
