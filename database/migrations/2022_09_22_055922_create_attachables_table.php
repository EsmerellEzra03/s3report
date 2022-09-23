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
        Schema::create('attachables', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('progress_id')->nullable();
            $table->string('name');
            $table->string('type');
            $table->string('created_by');
            $table->string('updated_by');
            $table->timestamps();

            $table->foreign('progress_id')->references('id')->on('progresses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attachables', function (Blueprint $table) {
            $table->dropForeign(['progress_id']);
        });
    }
};
