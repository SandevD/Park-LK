<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('district_id')->references('id')->on('districts')->cascadeOnDelete();
            $table->string('name_en', 100)->index();
            $table->string('name_si', 100)->nullable()->index();
            $table->string('name_ta', 100)->nullable()->index();
            $table->string('sub_name_en', 100)->nullable();
            $table->string('sub_name_si', 100)->nullable();
            $table->string('sub_name_ta', 100)->nullable();
            $table->string('postcode', 5)->nullable();
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
};
