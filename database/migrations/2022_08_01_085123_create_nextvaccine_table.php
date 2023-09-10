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
        Schema::create('nextvaccine', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->unsignedBigInteger('v_id'); 
            $table->foreign('v_id')->references('id')->on('vaccine')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('c_id'); 
            $table->foreign('c_id')->references('id')->on('children')->onUpdate('cascade')->onDelete('cascade');
            $table->date('next_date');
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
        Schema::dropIfExists('nextvaccine');
    }
};
