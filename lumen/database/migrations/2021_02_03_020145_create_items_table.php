<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration {
    public function up() {
        Schema::create('items', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name', 30);
            $table->integer('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('type')->onDelete('cascade');
            $table->integer('attack');
            $table->integer('defense');
            $table->integer('hp');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    public function down() {
        Schema::drop('items');
    }
}
