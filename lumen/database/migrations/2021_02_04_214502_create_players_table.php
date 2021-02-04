<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration {
    public function up() {
        Schema::create('players', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 30);
            $table->integer('level');
            $table->integer('max_hp');
            $table->integer('actual_hp');
            $table->integer('max_xp');
            $table->integer('actual_xp');
            $table->integer('strength');
            $table->integer('agility');
            $table->integer('intelligence');
            $table->integer('vitality');
            $table->integer('attack');
            $table->integer('defense');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    public function down() {
        Schema::drop('players');
    }
}
