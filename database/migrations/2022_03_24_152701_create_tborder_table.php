<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTborderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tborder', function (Blueprint $table) {
            $table->id();
            $table->string('contact_name');
            $table->string('contact_phone');
            $table->date('start_rent_day');
            $table->date('end_rent_day');
            $table->integer('total_rent_day');
            $table->string('driver');
            $table->string('bus');
          

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
        Schema::dropIfExists('tborder');
    }
}
