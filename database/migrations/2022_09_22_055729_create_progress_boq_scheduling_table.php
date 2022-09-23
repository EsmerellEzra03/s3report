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
        Schema::create('progress_boq_scheduling', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('progress_id')->nullable();
            $table->unsignedBigInteger('boqscheduling_id')->nullable();
            $table->integer('quantity');
            $table->integer('percent');
            $table->string('created_by');
            $table->string('updated_by');
            $table->timestamps();

            $table->foreign('progress_id')->references('id')->on('progresses')->onDelete('cascade');
            $table->foreign('boqscheduling_id')->references('id')->on('boq_schedulings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('progress_boq_scheduling', function (Blueprint $table) {
            $table->dropForeign(['progress_id']);
            $table->dropForeign(['boqscheduling_id']);
        });
    }
};
