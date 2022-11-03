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
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->string('title')->Unique();
            $table->string('slug')->Unique();
            $table->string('address');
            $table->string('categoryListing_id');
            $table->integer('bedroom');
            $table->integer('bathroom');
            $table->integer('building_width');
            $table->integer('area_width');
            $table->string('type');
            $table->integer('garage');
            $table->bigInteger('price');
            $table->string('description');
            $table->string('photo_path');
            $table->string('agent_id');
            $table->string('owner_name');
            $table->string('owner_phone');
            $table->string('status');
            $table->string('buyer_agent_id')->nullable();
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
        Schema::dropIfExists('listings');
    }
};
