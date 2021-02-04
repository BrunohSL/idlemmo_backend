<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnemiesTable extends Migration {
    public function up() {
        Schema::create('enemies', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name', 30);
            $table->integer('level');
            $table->integer('max_hp');
            $table->integer('actual_hp');
            $table->integer('xp_yield');
            $table->integer('attack');
            $table->integer('defense');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    public function down() {
        Schema::drop('enemies');
    }
}
