<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnemiesTable extends Migration {
    public function up() {
        Schema::create('enemies', function(Blueprint $table) {
            $table->increments('id');
            $table->string('characterName', 30);
            $table->integer('level');
            $table->integer('maxHp');
            $table->integer('currentHp');
            $table->integer('xpYield');
            $table->integer('attack');
            $table->integer('defense');
            $table->string('sprite', 20);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });

        DB::table('enemies')->insert(
            array(
                array(
                    'characterName' => 'Cat',
                    'level' => 1,
                    'maxHp' => 20,
                    'currentHp' => 20,
                    'xpYield' => 5,
                    'attack' => 4,
                    'defense' => 2,
                    'sprite' => 'cat1'
                ),
                array(
                    'characterName' => 'Gravekeeper',
                    'level' => 3,
                    'maxHp' => 50,
                    'currentHp' => 50,
                    'xpYield' => 10,
                    'attack' => 8,
                    'defense' => 5,
                    'sprite' => 'gravekeeper1'
                ),
                array(
                    'characterName' => 'General',
                    'level' => 5,
                    'maxHp' => 100,
                    'currentHp' => 100,
                    'xpYield' => 20,
                    'attack' => 16,
                    'defense' => 12,
                    'sprite' => 'governor'
                ),
            )
        );
    }

    public function down() {
        Schema::drop('enemies');
    }
}
