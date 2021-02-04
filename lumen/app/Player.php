<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model {

    protected $fillable = [
        "id",
        "name",
        "level",
        "max_hp",
        "actual_hp",
        "max_xp",
        "actual_xp",
        "strength",
        "agility",
        "inteligence",
        "vitality",
        "attack",
        "defense",
        "created_at",
        "updated_at",
    ];

    public static $rules = [
        "name" => "required",
        "level" => "required",
        "max_hp" => "required",
        "actual_hp" => "required",
        "max_xp" => "required",
        "actual_xp" => "required",
        "strength" => "required",
        "agility" => "required",
        "inteligence" => "required",
        "vitality" => "required",
        "attack" => "required",
        "defense" => "required",
    ];
}
