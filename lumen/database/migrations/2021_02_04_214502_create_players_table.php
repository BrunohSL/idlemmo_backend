<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration {
    public function up() {
        Schema::create('players', function(Blueprint $table) {
            $table->increments('id');
            $table->string('characterName', 30);
            $table->integer('level');
            $table->integer('maxHp');
            $table->integer('currentHp');
            $table->integer('maxXp');
            $table->integer('currentXp');
            $table->integer('strength');
            $table->integer('agility');
            $table->integer('intelligence');
            $table->integer('vitality');
            $table->integer('attack');
            $table->integer('defense');
            $table->string('sprite');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });

        DB::table('players')->insert(
            array(
                'characterName' => 'Xurilambs',
                'level' => 1,
                'maxHp' => 30,
                'currentHp' => 30,
                'maxXp' => 10,
                'currentXp' => 0,
                'strength' => 0,
                'agility' => 0,
                'intelligence' => 0,
                'vitality' => 0,
                'attack' => 8,
                'defense' => 5,
                'sprite' => "player",
            ),
        );
    }

    public function down() {
        Schema::drop('players');
    }
}
