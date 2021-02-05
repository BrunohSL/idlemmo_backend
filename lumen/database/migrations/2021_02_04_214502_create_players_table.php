<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration {
    public function up() {
        Schema::create('players', function(Blueprint $table) {
            $table->increments('id');
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

        DB::table('players')->insert(
            array(
                'name' => 'Xurilambs',
                'level' => 1,
                'max_hp' => 30,
                'actual_hp' => 30,
                'max_xp' => 10,
                'actual_xp' => 0,
                'strength' => 0,
                'agility' => 0,
                'intelligence' => 0,
                'vitality' => 0,
                'attack' => 8,
                'defense' => 5,
            ),
        );
    }

    public function down() {
        Schema::drop('players');
    }
}
