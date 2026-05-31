<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pensil', function (Blueprint $column) {
            $column->integer('kodepensil')->autoIncrement();
            $column->string('merkpensil', 30);
            $column->integer('stockpensil');
            $column->char('tersedia', 1);
            $column->primary('kodepensil');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pensil');
    }
};
