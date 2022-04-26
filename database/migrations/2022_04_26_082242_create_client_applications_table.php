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
        Schema::create('client_applications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 255);
            $table->char('phone', 20);
            $table->string('company', 100);
            $table->string('title', 255);
            $table->text('message');
            $table->string('attachment', 512);
            $table->timestamps();
            $table->unsignedBigInteger('user_id');

            $table->index('user_id', 'client_applications_users_idx');
            $table->foreign('user_id', 'client_applications_users_fk')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_applications');
    }
};
