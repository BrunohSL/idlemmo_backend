<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Enemy extends Model {
    protected $fillable = [
        "id",
        "name",
        "level",
        "max_hp",
        "actual_hp",
        "xp_yield",
        "attack",
        "defense",
        "sprite"
        "created_at",
        "updated_at",
    ];

    public static $rules = [
        "name" => "required",
        "level" => "required",
        "max_hp" => "required",
        "actual_hp" => "required",
        "xp_yield" => "required",
        "attack" => "required",
        "defense" => "required",
        "sprite" => "required",
    ];
}
