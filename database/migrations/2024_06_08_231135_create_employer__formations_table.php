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
        Schema::create('employer__formations', function (Blueprint $table) {
            $table->id();
            $table->date('datedebut');
            $table->date('datefin'); 
            $table->string('nombre');
            $table->foreignId('employer_id');
            $table->foreignId('formation_id');
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
        Schema::dropIfExists('employer__formations');
    }
};
