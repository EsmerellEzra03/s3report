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
        Schema::create('boq_schedulings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('boq_id')->nullable();
            $table->unsignedBigInteger('scheduling_id')->nullable();
            $table->integer('quantity');
            $table->integer('completed');
            $table->integer('percentage');
            $table->string('created_by');
            $table->string('updated_by');
            $table->timestamps();

            $table->foreign('boq_id')->references('id')->on('boqs')->onDelete('cascade');
            $table->foreign('scheduling_id')->references('id')->on('schedulings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('boq_schedulings', function (Blueprint $table) {
            $table->dropForeign(['boq_id']);
            $table->dropForeign(['scheduling_id']);
        });
    }
};
