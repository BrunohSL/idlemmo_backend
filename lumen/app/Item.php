<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Item extends Model {
    protected $fillable = [
        'id',
        'name',
        'price',
        'type',
        'level',
        'created_at',
        'updated_at',
    ];

    public static $rules = [
        "name" => "required|max:30",
        "price" => "required|max:10",
        "type" => "required|max:20",
        "level" => "required|numeric",
    ];
}
