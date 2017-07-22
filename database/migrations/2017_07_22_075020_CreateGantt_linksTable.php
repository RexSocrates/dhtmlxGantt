<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGanttLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gantt_links', function (Blueprint $table) {
            $table->increments('id');
            $table->string('start_date', 150);
            $table->string('duration', 150);
            $table->string('text', 150);
            $table->string('progress', 150);
            $table->string('parent', 150);
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
        Schema::dropIfExists('gantt_links');
    }
}
