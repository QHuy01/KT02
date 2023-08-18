<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('CHANNEL', function (Blueprint $table) {
            $table->increments('ChannelID');
            $table->string('ChannelName');
            $table->text('Description');
            $table->integer('SubscribersCount');
            $table->string('URL');
            $table->timestamp('Created_At')->nullable();
            $table->timestamp('Update_At')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('channel');
    }
};
