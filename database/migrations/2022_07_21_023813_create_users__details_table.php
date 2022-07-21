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
        Schema::create('users__details', function (Blueprint $table) {
            $table->id();
            $table->integer("u_id");
            $table->string("name");
            $table->string("tel");
            $table->string("address");
            $table->string("email");
            $table->timestamps("joined_date");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users__details');
    }
};
