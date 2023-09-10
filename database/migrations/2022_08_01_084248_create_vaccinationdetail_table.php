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
        Schema::create('vaccinationdetail', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->unsignedBigInteger('v_id'); 
             $table->foreign('v_id')->references('id')->on('vaccine')->onUpdate('cascade')->onDelete('cascade');
             $table->unsignedBigInteger('c_id'); 
             $table->foreign('c_id')->references('id')->on('children')->onUpdate('cascade')->onDelete('cascade');
             $table->unsignedBigInteger('h_id'); 
             $table->foreign('h_id')->references('h_id')->on('hospitals')->onUpdate('cascade')->onDelete('cascade');
             $table->date('v_date');
             $table->string('status')->default(pending);
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
        Schema::dropIfExists('vaccinationdetail');
    }
};
