<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeddingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weddings', function (Blueprint $table) {
            $table->id();
            $table->string('boy_name');
            $table->string('boy_image')->nullable();
            $table->string('boy_instagram')->nullable();
            $table->string('boy_facebook')->nullable();
            $table->string('boy_twitter')->nullable();
            $table->string('boy_pinterest')->nullable();
            $table->string('girl_name');
            $table->string('girl_image')->nullable();
            $table->string('girl_instagram')->nullable();
            $table->string('girl_facebook')->nullable();
            $table->string('girl_twitter')->nullable();
            $table->string('girl_pinterest')->nullable();
            $table->date('wedding_date');
            $table->string('banner_image')->nullable();
            $table->string('invited_by_name')->nullable();
            $table->string('invited_by_address')->nullable();
            $table->string('country_code')->nullable();
            $table->string('invited_by_phone')->nullable();
            $table->string('uuid');
            $table->string('random_number');
            $table->integer('user_id');
            $table->string('audio')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weddings');
    }
}
