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
            $table->string('sprite', 20);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });

        DB::table('enemies')->insert(
            array(
                array(
                    'name' => 'Cat',
                    'level' => 1,
                    'max_hp' => 20,
                    'actual_hp' => 20,
                    'xp_yield' => 5,
                    'attack' => 4,
                    'defense' => 2,
                    'sprite' => 'cat1'
                ),
                array(
                    'name' => 'Gravekeeper',
                    'level' => 3,
                    'max_hp' => 50,
                    'actual_hp' => 50,
                    'xp_yield' => 10,
                    'attack' => 8,
                    'defense' => 5,
                    'sprite' => 'gravekeeper1'
                ),
                array(
                    'name' => 'General',
                    'level' => 5,
                    'max_hp' => 100,
                    'actual_hp' => 100,
                    'xp_yield' => 20,
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
