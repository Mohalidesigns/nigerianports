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
        Schema::create('npas', function (Blueprint $table) {
            $table->id();
            $table->string('cname');
            $table->string('phone');
            $table->string('address');
            $table->string('vregistration');
            $table->string('enumber');
            $table->string('vmake');
            $table->string('fee');
            $table->date('idate');
            $table->date('edate');
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
        Schema::dropIfExists('npas');
    }
};
