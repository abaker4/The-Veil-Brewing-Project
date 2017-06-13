<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsletterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newsletters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->unique();
            $table->text('body');
            $table->timestamps();
        });

        Schema::create('contact_newsletter', function (Blueprint $table) {
            $table->integer('contact_id');
            $table->integer('newsletter_id');
            $table->primary(['contact_id', 'newsletter_id', ]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('newsletters');

        Schema::dropIfExists('contact_newsletter');
    }
}
