<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model {
    protected $fillable = [
        "id",
        "characterName",
        "level",
        "maxHp",
        "currentHp",
        "maxXp",
        "currentXp",
        "strength",
        "agility",
        "inteligence",
        "vitality",
        "attack",
        "defense",
        "sprite",
        "created_at",
        "updated_at",
    ];

    public static $rules = [
        "characterName" => "required",
        "level" => "required",
        "maxHp" => "required",
        "currentHp" => "required",
        "maxXp" => "required",
        "currentXp" => "required",
        "strength" => "required",
        "agility" => "required",
        "inteligence" => "required",
        "vitality" => "required",
        "attack" => "required",
        "defense" => "required",
        "sprite" => "required",
    ];
}
