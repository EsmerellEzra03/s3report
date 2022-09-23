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
        Schema::create('assigns', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('contractor_id')->nullable();
            $table->unsignedBigInteger('scope_id')->nullable();
            $table->string('created_by');
            $table->string('updated_by');
            $table->timestamps();

            $table->foreign('contractor_id')->references('id')->on('contractors')->onDelete('cascade');
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
        Schema::table('assigns', function (Blueprint $table) {
            $table->dropForeign(['contractor_id']);
            $table->dropForeign(['scope_id']);
        });
    }
};
