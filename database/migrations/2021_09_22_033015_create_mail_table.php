<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mail', function (Blueprint $table) {
            $table->id();
            $table->time('incoming_at');
            $table->integer('mail_code');
            $table->date('mail_date');
            $table->string('mail_from');
            $table->string('mail_to');
            $table->text('mail_subject');
            $table->text('description');
            $table->text('file_upload');
            $table->integer('mail_typeId');
            $table->integer('userId');
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
        Schema::dropIfExists('mail');
    }
}
