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
        $maxStringLength = 30;
        $maxPhoneLength = 12;
        $maxUrlLength = 200;

        Schema::create('employees', function (Blueprint $table) use ($maxStringLength, $maxPhoneLength, $maxUrlLength) {
            $table->id();
            $table->string("name", $maxStringLength);
            $table->string("patronymic", $maxStringLength);
            $table->string("surname", $maxStringLength);
            $table->string("birthday", $maxStringLength);
            $table->string("position", $maxStringLength);
            $table->string("phone", $maxPhoneLength);
            $table->string("avatar_url", $maxUrlLength)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
