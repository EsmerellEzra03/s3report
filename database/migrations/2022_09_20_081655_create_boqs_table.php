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
        Schema::create('boqs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('scope_id')->nullable();
            $table->string('name');
            $table->integer('quantity');
            $table->string('created_by');
            $table->string('updated_by');
            $table->timestamps();

            $table->foreign('scope_id')->references('id')->on('scopes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('boqs', function (Blueprint $table) {
            $table->dropForeign(['scope_id']);
        });
    }
};
