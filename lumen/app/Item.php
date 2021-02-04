<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Item extends Model {
    protected $fillable = [
        'id',
        'name',
        'type',
        'attack',
        'defense',
        'hp',
        'created_at',
        'updated_at',
    ];

    public static $rules = [
        "name" => "required|max:30",
        "type" => "required|numeric|exists:type,id",
        "attack" => "required|numeric",
        "defense" => "required|numeric",
        "hp" => "required|numeric",
    ];

    public function type() {
        return $this->belongsTo("App\Type");
    }
}
