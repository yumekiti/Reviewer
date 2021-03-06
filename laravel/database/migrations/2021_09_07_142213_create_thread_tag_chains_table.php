<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThreadTagChainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thread_tag_chains', function (Blueprint $table) {
            //thread_外部キー制約
            $table->unsignedBigInteger('thread_id')->index();
            $table->foreign('thread_id')->references('id')->on('threads');
            //tag_外部キー制約
            $table->unsignedBigInteger('tag_id')->index();
            $table->foreign('tag_id')->references('id')->on('tags');
            //複合主キー
            $table->primary(['thread_id', 'tag_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thread_tag_chains');
    }
}
