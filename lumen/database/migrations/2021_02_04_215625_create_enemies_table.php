<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnemiesTable extends Migration {
    public function up() {
        Schema::create('enemies', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name', 30);
            $table->int('level');
            $table->int('max_hp');
            $table->int('actual_hp');
            $table->int('xp_yield');
            $table->int('attack');
            $table->int('defense');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    public function down() {
        Schema::drop('enemies');
    }
}
