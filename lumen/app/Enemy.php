<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Enemy extends Model {
    protected $fillable = [
        "id",
        "characterName",
        "level",
        "maxHp",
        "currentHp",
        "xpYield",
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
        "xpYield" => "required",
        "attack" => "required",
        "defense" => "required",
        "sprite" => "required",
    ];
}
