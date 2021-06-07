<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserWidgets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_widgets', function (Blueprint $table) {
            $table->unsignedBigInteger('widget_id');
            $table->unsignedBigInteger('mirror_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('widget_id')->references('id')->on('widgets');
            $table->foreign('mirror_id')->references('id')->on('mirror');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_widgets');
    }
}
