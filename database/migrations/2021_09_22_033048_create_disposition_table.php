<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDispositionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disposition', function (Blueprint $table) {
            $table->id();
            $table->string('disposition_at');
            $table->string('reply_at');
            $table->text('description');
            $table->text('notification');
            $table->integer('mailId');
            $table->integer('userId');
            $table->string('status');
            $table->integer('dispositionId');
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
        Schema::dropIfExists('disposition');
    }
}
