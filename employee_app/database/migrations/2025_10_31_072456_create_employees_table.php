<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');                 // Họ tên
            $table->string('position')->nullable(); // Chức vụ
            $table->string('email')->unique();      // Email duy nhất
            $table->string('phone')->nullable();    // SĐT
            $table->date('joined_at')->nullable();  // Ngày vào làm
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};

