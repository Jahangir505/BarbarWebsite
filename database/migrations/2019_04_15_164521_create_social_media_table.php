<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_media', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sm_facebook');
            $table->string('sm_twetter');
            $table->string('sm_rss');
            $table->string('sm_linkedin');
            $table->string('sm_google');
            $table->string('sm_youtube');
            $table->string('sm_skype');
            $table->string('sm_phone',20);
            $table->string('sm_email',50);
            $table->string('sm_address',255);
            $table->integer('sm_status')->default(1);
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
        Schema::dropIfExists('social_media');
    }
}
