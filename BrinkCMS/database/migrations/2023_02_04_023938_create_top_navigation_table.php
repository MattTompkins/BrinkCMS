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
        Schema::create('top_navigation', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('linkText');
            $table->string('linkURL')->nullable();
            $table->string('position')->default('main_nav_bar__simple_link');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('top_navigations');
    }
};
