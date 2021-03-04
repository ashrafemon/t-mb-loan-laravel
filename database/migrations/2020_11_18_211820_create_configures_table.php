<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfiguresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configures', function (Blueprint $table) {
            $table->id();
            $table->string('site_name');
            $table->string('site_logo');
            $table->string('copyright');
            $table->string('mail_receiver');
            $table->string('contact_number');
            $table->string('fb_link')->nullable();
            $table->text('meta_desc')->nullable();
            $table->text('why_page_content')->nullable();
            $table->string('clients_title')->nullable();
            $table->boolean('complain')->nullable()->default(0);
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
        Schema::dropIfExists('configures');
    }
}
