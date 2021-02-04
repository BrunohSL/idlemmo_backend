<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Item extends Model {
    protected $fillable = [
        'id',
        'type',
    ];

    public static $rules = [
        "type" => "required|max:30",
    ];
}