<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
<<<<<<< HEAD:database/migrations/2017_06_08_175005_create_events_table.php
            $table->string('title');
            $table->text('body');
            $table->dateTime('time_start');
            $table->dateTime('time_finish');
            $table->dateTime('date');
=======
            $table->string('first');
            $table->string('last');
            $table->string('email');
            $table->text('message');
>>>>>>> origin/master:database/migrations/2017_06_29_161914_create_contacts_table.php
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
        Schema::dropIfExists('contacts');
    }
}
