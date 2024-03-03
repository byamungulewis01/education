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
        Schema::create('contact_us', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('header_section');
            $table->string('company_desc_title');
            $table->string('company_descr');
            $table->string('addr_title');
            $table->string('company_addr_details');
            $table->string('contact_title');
            $table->string('contact_details');
            $table->string('head_phone');
            $table->string('head_email');
            $table->string('branch_phone');
            $table->string('branch_email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_us');
    }
};
